<?php

namespace App\Http\Livewire;

use App\Models\Karyawan;
use Livewire\Component;

class ListKaryawan extends Component
{

    public $showAddForm = false;
    protected $listeners = [
        'karyawan-created' => '$refresh',
    ];

    public function render()
    {
        $listKaryawan = Karyawan::get();
        return view('livewire.list-karyawan', [
            'data' => $listKaryawan
        ]);
    }

    public function toggleAddForm()
    {
        $this->showAddForm = !$this->showAddForm;
    }
}
