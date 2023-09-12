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
    public $category_id;

    protected $rules =[
        'name' => 'required',
        'description' => 'required|min:10',
        'price' => 'required|numeric',
        'category_id' => 'required'
    ];



    public function store(){
        $this->validate();
        Auth::user()->announcements()->create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category_id
        ]);

        $this->reset();
        return redirect()->route('welcome')->with('message', "Il tuo annuncio è stato inserito correttamente!");
    }


    public function render()
    {
        return view('livewire.create-announcement');
    }
}
