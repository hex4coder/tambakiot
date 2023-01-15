<?php

namespace App\Http\Livewire;

use App\Models\Karyawan;
use App\Models\Panen;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class GrafikUser extends Component
{
    public function render()
    {
        $jumlahKaryawanSaya = Karyawan::where('user_id', Auth::id())->count();
        $allPanen = Panen::with(['karyawan' => function($query) {
            $query->where('user_id', Auth::id());
        }])->get();

        $jumlahPanen = 0;
        foreach ($allPanen as $k => $v) {
            $updated_at = $v['updated_at'];
            $arr = explode('-', $updated_at);
            $bulan = (int)$arr[1];
            $tahun = (int)$arr[0];
            $tahunSekarang = Carbon::now()->year;
            $bulanSekarang = Carbon::now()->month;
            
            if(($tahun == $tahunSekarang) && ($bulan == $bulanSekarang)) {
                $jumlahPanen++;
            }
        }

        $data = [
            'jumlah_panen' => $jumlahPanen,
            'jumlah_karyawan' => $jumlahKaryawanSaya,
        ];

        return view('livewire.grafik-user', $data);
    }
}
