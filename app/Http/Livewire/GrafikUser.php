<?php

namespace App\Http\Livewire;

use App\Models\Karyawan;
use App\Models\Panen;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class GrafikUser extends Component
{
    public function render()
    {
        $jumlahKaryawanSaya = Karyawan::where('user_id', Auth::id())->count();
        $jumlahPanen = Panen::with('karyawan', function($query) {
            $query->where('user_id', Auth::id());
        })->count();
        $data = [
            'jumlah_panen' => $jumlahPanen,
            'jumlah_karyawan' => $jumlahKaryawanSaya,
        ];

        return view('livewire.grafik-user', $data);
    }
}
