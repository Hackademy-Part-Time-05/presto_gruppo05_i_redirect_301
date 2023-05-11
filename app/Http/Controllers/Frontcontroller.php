<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class Frontcontroller extends Controller
{
    public function welcome() {
        $latestAnnouncements = Announcement::take(6)->orderBy('created_at', 'desc')->get();
        // dd($latestAnnouncements);
        return view('welcome', compact('latestAnnouncements'));
    }

    public function categoryShow(Category $category)
    {
        return view('details', compact('category'));
    }
}
