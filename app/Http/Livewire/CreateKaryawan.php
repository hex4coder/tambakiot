<?php

namespace App\Http\Livewire;

use App\Models\Karyawan;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CreateKaryawan extends Component
{

    use LivewireAlert;

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

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.create-karyawan');
    }


    public function submitForm()
    {
        $validatedData = $this->validate();
        $validatedData['user_id'] = Auth::id();

        $karyawan = Karyawan::where('kode', $validatedData['kode'])->first();
        // dd($karyawan);
        if ($karyawan == null) {
            Karyawan::create($validatedData);
            $this->emit('karyawan-created');

            $this->alert('success', 'Data berhasil diinput');
        } else {
            $this->alert('error', 'Data karyawan dengan kode alat ' . $validatedData['kode'] . ' sudah ada.');
        }
    }
}
