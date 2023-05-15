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

    public function showAnnouncement(Announcement $announcement){
        return view('announcements.details', compact('announcement'));
    }

    public function indexAnnouncement()
    {
        $announcements=Announcement::where('is_accepted', true)->paginate(6);
        return view('announcements.index', compact('announcements'));
    }
}
