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

    public function showAnnouncement(Announcement $latestAnnouncement){
        return view('announcements.details', compact('latestAnnouncement'));
    }
}
