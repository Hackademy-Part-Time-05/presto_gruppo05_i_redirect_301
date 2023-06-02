<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;
use App\Models\User;
use App\Models\Announcement;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index(){
        $announcement_to_check = Announcement::where('is_accepted',null)->first();
        if($announcement_to_check != null) {
            $latestannouncementbyuser = Announcement::where('user_id', $announcement_to_check->user->id)->orderBy('created_at', 'desc')->take(1)->get();
        } else {
            $latestannouncementbyuser = false;
        }
        $announcements_rejected = Announcement::where('is_accepted',false)->get();
        return view('revisor.index', compact('announcement_to_check', 'latestannouncementbyuser', 'announcements_rejected'));
    }

    public function dashboard(){
        $announcements_to_check = Announcement::where('is_accepted',null)->paginate(5);
        $rejected_announcement = Announcement::where('is_accepted',0)->paginate(5);
        return view('revisor.dashboard', compact('announcements_to_check', 'rejected_announcement'));
    }


    public function acceptAnnouncement(Announcement $announcement){
        $announcement->setAccepted(true);
        return redirect()->back()->with('messageS', 'Complimenti ,annuncio accettato');
    }
    public function rejectAnnouncement(Announcement $announcement){
        $announcement->setAccepted(false);
        return redirect()->back()->with('messageR', 'Complimenti ,annuncio rifiutato');
    }

    public function becomeRevisor()
    {
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect('/')-> with('request', 'Complimenti! Hai richiesto di diventare revisore correttamente.');
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);
        return redirect('/')-> with('become', 'Complimenti! L\'utente è diventato revisore');
    }

    // public function setRevisionable(Announcement $announcement) {
    //     $announcement->is_accepted=null;
    //     $announcement->save();
    // }

    public function setRevisionable(Announcement $announcement){
        $announcement->setNull(null);
        return redirect()->back()->with('message', 'Complimenti ,annuncio rifiutato');
    }
}
