<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    public function index(){
        $announcement_to_check = Announcement::where('is_accepted', null)->first();
        return view('revisor.index',compact('announcement_to_check'));
    }

    public function acceptAnnouncement(Announcement $announcement){
        $announcement->setAccepted(true);
        return redirect()->back()->with('message','Annuncio accettato correttamente');
    }
    public function rejectAnnouncement(Announcement $announcement){
        $announcement->setAccepted(false);
        return redirect()->back()->with('message','Annuncio rifutato correttamente');
    }

    public function formRevisor(){
        return view('revisor.becomeRevisor');
    }

    public function becomeRevisor(Request $request){

        $coverLetter = $request->coverLetter;
        Mail::to('admin@rapidshop.com')->send(new BecomeRevisor(Auth::user(),$coverLetter));

        return redirect()->route('welcome');
    }

}
