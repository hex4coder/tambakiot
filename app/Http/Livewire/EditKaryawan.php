<?php

namespace App\Http\Livewire;

use App\Models\Karyawan;
use Illuminate\Database\QueryException;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class EditKaryawan extends Component
{
    use LivewireAlert;
    public $idKaryawan;
    public $nama = '';
    public $kode = '';
    public $ssid = 'SmartScaller.Net';
    public $ipAddress = '192.168.4.1';
    public $password = '12345678';

    protected $rules = [
        'nama' => 'required|min:3',
        'kode' => 'required|min:6',
        'ssid' => 'required|min:4',
        'ipAddress' => 'required|ipv4',
        'password' => 'required|min:8'
    ];

    public function resetForm()
    {
        $this->nama = '';
        $this->kode = '';
        $this->ssid = 'SmartScaller.Net';
        $this->ipAddress = '192.168.4.1';
        $this->password = '12345678';
    }

    public function fillForm()
    {
        $k = Karyawan::find($this->idKaryawan);
        $this->nama = $k->nama;
        $this->kode = $k->kode;
        $this->ssid = $k->ssid;
        $this->ipAddress = $k->ipAddress;
        $this->password = $k->password;
    }

    public function submitForm()
    {
        $validatedData = $this->validate();

        $k = Karyawan::find($this->idKaryawan);
        if ($k) {
            try {
                //code...
                $k->update($validatedData);
                $this->emit('karyawan-updated');
                $this->alert('success', 'Data berhasil diperbarui');
                $this->resetForm();
            } catch (QueryException $th) {
                $this->alert('warning', 'Maaf, data dengan kode ' . $this->kode . ' sudah ada.');
            }
        } else {
            $this->alert('warning', 'Data karyawan dengan id ' . $this->id . ' tidak ditemukan.');
        }
    }

    public function mount()
    {
        $this->fillForm();
    }
    public function render()
    {
        return view('livewire.edit-karyawan');
    }
}
