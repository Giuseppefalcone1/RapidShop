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

    protected $rules = [
        'name' => 'required',
        'description' => 'required|min:10',
        'price' => 'required|numeric|max:99999',
        'category_id' => 'required',
    ];

    protected $messages = [

        'name.required' => "Il campo Nome è obbligatorio",
        'description.required' => "Il campo Descrizione è obbligatorio",
        'description.min' => "Il campo Descrizione deve avere più di 10 caratteri",
        'price.required' => 'Il campo Prezzo è obbligatorio',
        'price.numeric' => 'Il campo Prezzo deve contenere solo numeri',
        'price.max' => 'Max: 99.999',
        'category_id.required' => "Il campo Categoria è obbligatorio"

    ];

    public function store()
    {
        $this->validate();
        Auth::user()
            ->announcements()
            ->create([
                'name' => $this->name,
                'description' => $this->description,
                'price' => $this->price,
                'category_id' => $this->category_id,
            ]);
        session()->flash('status', 'Il tuo annuncio è stato inserito correttamente!');
        $this->redirect('/announcement/create');
        $this->clear();
    }

    public function clear()
    {
        $this->name = '';
        $this->description = '';
        $this->price = '';
    }
    public function render()
    {
        return view('livewire.create-announcement');
    }
}
