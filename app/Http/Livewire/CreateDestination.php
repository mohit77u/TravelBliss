<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateDestination extends Component
{
    use WithFileUploads;

    public $destination;
    public $state;

    public function CreateDestination(Request $request)
    {
        dd($this->destination, $this->state);
    }

    public function render()
    {
        return view('livewire.create-destination');
    }
}
