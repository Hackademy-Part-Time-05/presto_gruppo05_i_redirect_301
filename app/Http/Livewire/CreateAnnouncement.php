<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;

class CreateAnnouncement extends Component
{
    public $title;
    public $body;
    public $price;
    public $category;


    protected $rules = [
        'title' => 'required|min:4',
        'body' => 'required',
        'price' => 'required|numeric',
        'category' => 'required',
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è richiesto',
        'min' => ':attribute troppo corto',
        'max' => ':attribute troppo lungo',
        'numeric' => 'Il prezzo deve essere un numero',
    ];

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
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
