<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListKaryawan extends Component
{

    public $showAddForm = false;


    public function render()
    {
        return view('livewire.list-karyawan');
    }

    public function toggleAddForm() {
        $this->showAddForm = !$this->showAddForm;
    }
}
