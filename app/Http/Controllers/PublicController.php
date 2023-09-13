<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        $announcements = Announcement::take(6)->orderBy('created_at','desc')->get();
        return view('welcome',compact('announcements'));
    }

    public function show(Announcement $announcement){
        return view('announcements.show',compact('announcement'));
    }
}
