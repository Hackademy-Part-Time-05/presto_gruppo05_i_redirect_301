<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class Frontcontroller extends Controller
{
    public function welcome() {
        $announcements = Announcement::where('is_accepted', true)->take(6)->orderBy('created_at', 'desc')->get();
        // dd($latestAnnouncements);
        return view('welcome', compact('announcements'));
    }

    public function categoryShow(Category $category)
    {
        $announcements = $category->announcements()->where('is_accepted', true)->get();
        return view('details', compact('category', 'announcements'));
    }

    public function searchAnnouncement(Request $request)
    {
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(10);
        // dd($announcements);
        return view('announcements.index', compact( 'announcements'));
    }
}
