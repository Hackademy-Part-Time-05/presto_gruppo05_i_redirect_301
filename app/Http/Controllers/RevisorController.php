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
        return view('revisor.index', compact('announcement_to_check'));
    }

    public function acceptAnnouncement(Announcement $announcement){
        $announcement->setAccepted(true);
        return redirect()->back()->with('message', 'Complimenti ,annuncio accettato');
    }
    public function rejectAnnouncement(Announcement $announcement){
        $announcement->setAccepted(false);
        return redirect()->back()->with('message', 'Complimenti ,annuncio rifiutato');
    }

    public function becomeRevisor()
    {
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect('/nuovo/annuncio')->with('message', 'Complimenti! Hai richiesto di diventare revisore correttamente.');
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);
        return redirect('/nuovo/annuncio')-> with('message', 'Complimenti! L\'utente è diventato revisore');
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
