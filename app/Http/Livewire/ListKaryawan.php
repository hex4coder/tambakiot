<?php

namespace App\Http\Livewire;

use App\Models\Karyawan;
use Livewire\Component;
use Livewire\WithPagination;

class ListKaryawan extends Component
{

    use WithPagination;

    public $showAddForm = false;
    public $perPage = 5;
    protected $paginationTheme = 'tailwind';
    protected $listeners = [
        'karyawan-created' => '$refresh',
        'karyawan-created' => 'karyawanCreated'
    ];


    public function karyawanCreated()
    {
        $this->showAddForm = false;
    }

    public function render()
    {
        $listKaryawan = Karyawan::paginate($this->perPage);

        return view('livewire.list-karyawan', [
            'data' => $listKaryawan
        ]);
    }

    public function toggleAddForm()
    {
        $this->showAddForm = !$this->showAddForm;
    }
}
