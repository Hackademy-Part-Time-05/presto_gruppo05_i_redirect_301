<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function createAnnouncements()
    {
        return view('announcements.create');
    }
}
