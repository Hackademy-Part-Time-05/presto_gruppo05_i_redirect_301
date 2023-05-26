<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use App\Models\User;
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
        $announcements = $category->announcements()->where('is_accepted', true)->paginate(5);
        return view('details', compact('category', 'announcements'));
    }

    public function userShow(User $user)
    {
        $announcements_accepted = Announcement::where('user_id', auth()->user()->id)->where('is_accepted', true)->count();

        $announcements_to_be_revisioned = Announcement::where('user_id', auth()->user()->id)->where('is_accepted', null)->count();

        $announcements_rejected = Announcement::where('user_id', auth()->user()->id)->where('is_accepted', false)->count();

        $latest = 0;

        foreach(Announcement::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->take(1)->get() as $cache) {
            $latest = $cache->created_at;
        }
        
        return view('auth.user', compact('announcements_accepted', 'announcements_to_be_revisioned', 'announcements_rejected', 'latest'));
    }

    public function searchAnnouncement(Request $request)
    {
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(10);
        // dd($announcements);
        return view('announcements.index', compact( 'announcements'));
    }

 public function setLanguage($lang)
 {
    session()->put('locale' ,$lang);
    return redirect()->back();
  }
}
