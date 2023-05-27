<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function createAnnouncements()
    {
        return view('announcements.create');
    }

    public function modifyAnnouncements(Announcement $announcement) {
        return view('announcements.modify', compact('announcement'));
    }

    public function showAnnouncement(Announcement $announcement){
        $latestannouncementbyuser = Announcement::where('user_id', $announcement->user->id)->orderBy('created_at', 'desc')->take(1)->get();
        // dd($latestannouncementbyuser);
        $announcement->viewsCounter();
        return view('announcements.details', compact('announcement', 'latestannouncementbyuser'));
    }

    public function indexAnnouncement()
    {
        $announcements=Announcement::where('is_accepted', true)->paginate(6);
        return view('announcements.index', compact('announcements'));
    }
}
