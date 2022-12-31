<?php

namespace App\Http\Livewire;

use App\Models\Karyawan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class ListKaryawan extends Component
{

    use WithPagination;
    use LivewireAlert;

    public $showAddForm = false;
    public $perPage = 5;
    public $idToDelete = -1;
    protected $paginationTheme = 'tailwind';
    protected $listeners = [
        'karyawan-created' => '$refresh',
        'karyawan-created' => 'karyawanCreated',
        'deleteConfirm'
    ];

    public function deleteConfirm()
    {
        if ($this->idToDelete !== -1) {
            $k = Karyawan::find($this->idToDelete);
            $k->delete();
        }
        $this->idToDelete = -1;
        $this->alert('success', 'Data karyawan berhasil dihapus.');
    }

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

    public function deleteKaryawan($id)
    {
        $k = Karyawan::find($id);
        $this->idToDelete = $id;
        $this->alert('warning', 'Yakin ingin hapus data karyawan ' . $k->nama . ' ?', [
            'showConfirmButton' => true,
            'confirmButtonText' => 'Ya. Hapus !',
            'showCancelButton' => true,
            'cancelButtonText' => 'Tidak',
            'onConfirmed' => 'deleteConfirm',
            'toast' => false,
            'position' => 'center',
            'timer' => 0,
        ]);
    }
}
