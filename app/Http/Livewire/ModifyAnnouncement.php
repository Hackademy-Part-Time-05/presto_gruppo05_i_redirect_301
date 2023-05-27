<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Category;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use GuzzleHttp\Psr7\Request;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ModifyAnnouncement extends Component
{
    use WithFileUploads;
    public $title;
    public $body;
    public $price;
    public $category;
    public $temporary_images;
    public $images=[];
    public $announcement;
    
    
    public function mount($announcement) {
        $this->announcement=$announcement;
        $this->title = $announcement->title;
        $this->body = $announcement->body;
        $this->price = $announcement->price;
        $this->category = $announcement->category->id;
        foreach($announcement->images as $key => $image) {
            
            $this->images[$key] = $image;
            $this->temporary_images[$key] = $image;
        }
        // dd($this->temporary_images);
    }
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

    public function store($announcement)
    {
        $this->validate();
        $category = Category::find($this->category);
        $this->announcement=Announcement::find('id', $announcement->id)->get();
        dd($this->announcement);

        if(count($this->images)){
            foreach($this->images as $image){
                // $this->announcement->images()->create(['path'=>$image->store('images', 'public')]); 
                $newFileName = "announcements/{$this->announcement->id}";
                $newImage = $this->announcement->images()->create(['path'=>$image->store($newFileName, 'public')]);
                
                dispatch(new ResizeImage($newImage->path , 400, 300));
            }

            File::deleteDirectory(storage_path("/app/livewire-tmp"));
        }
        $this->announcement->title=$this->title;
        $this->announcement->body=$this->body;
        $this->announcement->price=$this->price;


        Auth::user()->announcements()->save($this->announcement);
        session()->flash('message', 'Hai inserito con successo il tuo annuncio!');
        $this->cleanForm();
        
        return redirect(route('userShow'));
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
        return view('livewire.modify-announcement');
    }
}
