<?php

namespace App\Livewire;

use App\Jobs\GoogleVisionSafeSearch;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateAnnouncement extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $price;
    public $category_id;
    public $images = [];
    public $temporary_images;

    public $announcement;

    protected $rules = [
        'name' => 'required',
        'description' => 'required|min:10',
        'price' => 'required|numeric|max:99999',
        'category_id' => 'required',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',
    ];

    protected $messages = [
        'name.required' => 'Il campo Nome è obbligatorio',
        'description.required' => 'Il campo Descrizione è obbligatorio',
        'description.min' => 'Il campo Descrizione deve avere più di 10 caratteri',
        'price.required' => 'Il campo Prezzo è obbligatorio',
        'price.numeric' => 'Il campo Prezzo deve contenere solo numeri',
        'price.max' => 'Max: 99.999',
        'category_id.required' => 'Il campo Categoria è obbligatorio',
        'images.image' => 'Il file dev\'essere di tipo immagine',
        'images.max' => 'Il file dev\'essere massimo 1mb',
        'temporary_images.*.image' => 'I file devono essere immagini',
        'temporary_images.*.max' => 'Il file dev\'essere massimo 1mb',
    ];

    public function updatedTemporaryImages()
    {
        if (
            $this->validate([
                'temporary_images.*' => 'image|max:1024',
            ])
        ) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function store()
    {
        $this->validate();
        $this->announcement = Category::find($this->category_id)
            ->announcements()
            ->create($this->validate());
        $this->announcement->user()->associate(Auth::user());
        $this->announcement->save();
        if (count($this->images)) {
            foreach ($this->images as $image) {
                // $this->announcement->images()->create([
                //     'path' => $image->store('images', 'public'),
                // ]);
                $newFileName = "announcements/{$this->announcement->id}";
                $newImage = $this->announcement->images()->create([
                    'path' => $image->store($newFileName, 'public'),
                ]);

                dispatch(new ResizeImage($newImage->path , 300 , 300));
                dispatch(new GoogleVisionSafeSearch($newImage->id));
            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
        session()->flash('status', 'Il tuo annuncio è stato inserito correttamente!');
        $this->redirect('/announcement/create');
        $this->clear();
    }

    public function clear()
    {
        $this->name = '';
        $this->description = '';
        $this->price = '';
        $this->images = [];
        $this->temporary_images = [];
    }
    public function render()
    {
        return view('livewire.create-announcement');
    }
}
