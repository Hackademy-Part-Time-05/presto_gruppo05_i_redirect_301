<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class Frontcontroller extends Controller
{
    public function welcome() {
        $latestAnnouncements = Announcement::take(6)->orderBy('created_at')->get();
        // dd($latestAnnouncements);
        return view('welcome', compact('latestAnnouncements'));
    }
}
