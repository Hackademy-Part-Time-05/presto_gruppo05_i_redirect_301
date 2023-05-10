<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class CreateAnnouncement extends Component
{
    public $title;
    public $body;
    public $price;




    public function render()
    {
        return view('livewire.create-announcement');
    }
}
