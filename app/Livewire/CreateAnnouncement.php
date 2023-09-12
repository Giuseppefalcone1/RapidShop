<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncement extends Component
{
    
    public $name;
    public $description;
    public $price;

    protected $rules =[
        'name' => 'required',
        'description' => 'required|min:10',
        'price' => 'required|numeric'
    ];



    public function store(){
        Auth::user()->announcements()->create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price
        ]);

        $this->reset();
        return redirect()->route('welcome')->with('message', "Il tuo annuncio è stato inserito correttamente!");
    }


    public function render()
    {
        return view('livewire.create-announcement');
    }
}
