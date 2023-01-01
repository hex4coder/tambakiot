<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DataTitle extends Component
{

    public $title;
    public $description;

    public function render()
    {
        return view('livewire.data-title');
    }
}
