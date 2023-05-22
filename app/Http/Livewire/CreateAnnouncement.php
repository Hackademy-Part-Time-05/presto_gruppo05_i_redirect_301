<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;

class CreateAnnouncement extends Component
{
    use WithFileUploads;


    public $title;
    public $body;
    public $price;
    public $category;
    public $temporary_images;
    public $images=[];

    protected $rules = [
        'title' => 'required|min:4',
        'body' => 'required',
        'price' => 'required|numeric',
        'category' => 'required',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è richiesto',
        'min' => ':attribute troppo corto',
        'max' => ':attribute troppo lungo',
        'numeric' => 'Il prezzo deve essere un numero',
        'temporary_images.required' => 'Immagine richiesta',
        'temporary_images.*.image' => 'i file devono essere immagini',
        'temporary_images.*.max' => 'L\'immagine dev\'essere massimo di 1 mb',
        'images.image' => 'L\'immagine dev\'essere un\'immagine',
        'images.max' => 'L\'immagine dev\'essere massimo di 1mb',
        
    ];


    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*' => 'image|max:1024',
        ])){
            foreach ($this->temporary_images as $image){
                $this->images[] =$image;
                        }
            }
    }
    public function removeImage($key)
    {
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    public function store()
    {
        $category = Category::find($this->category);
        $announcement = $category->announcements()->create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
        ]);

        Auth::user()->announcements()->save($announcement);
        session()->flash('message', 'Hai inserito con successo il tuo annuncio!');
        $this->cleanForm();
        
    }

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function cleanForm() {
        $this->title = '';
        $this->body = '';
        $this->price = '';
        $this->category = '';
        $this->images = [];
        $this->temporary_images = [];
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
