<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        $announcements = Announcement::take(6)->where('is_accepted', true)->orderBy('created_at','desc')->get();
        return view('welcome',compact('announcements'));
    }

    public function show(Announcement $announcement){
        return view('announcements.show',compact('announcement'));
    }

    public function searchAnnouncements(Request $request){
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(8);
        return view('announcements.index', compact('announcements'));
    }
}
