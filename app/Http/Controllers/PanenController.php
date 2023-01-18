<?php

namespace App\Http\Controllers;

use App\Models\Panen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class PanenController extends Controller
{
    public function index()
    {
        return view('panen');
    }

    // hapus data
    // $id adalah panen id
    public function delete($id) {
        $panen = Panen::find($id);
        if($panen) {
            // hapus foto terlebih dahulu
            $file_path = $panen->url_foto;
            $arr = explode('//', $file_path);
            $file_path = $arr[3];            
            $file_path = storage_path('app/public/') . $file_path;
            
            if(!@unlink($file_path)) {
                return 'foto gagal';
            }

            // hapus model
            $panen->delete();

            return 'berhasil';
        } else {
            return 'gagal';
        }
    }

    public function post(Request $request) {
        // Memastikan data sudah lengkap
        $harga = $request->post('harga');
        $jumlah = $request->post('jumlah');
        $karyawan_id = $request->post('karyawan_id');
        $keterangan = $request->post('keterangan');
        $foto = $request->file('foto');

        // Menyimpan gambar yang dikirim (foto udang) kedalam database dan folder storage
        $lokasi = $foto->store('/public/foto', ['disk' => 'public']);

        if(!$lokasi) {
            return 'upload foto gagal';
        }

        // URL penyimpanan harus diawali dengan localhost.... nanti diclient diganti
        $url_foto  = URL::to('/') . "//storage//" . $lokasi;

        // Melakukan insert data kedalam database
        $new = Panen::create([
            'karyawan_id' => $karyawan_id,
            'harga_per_kg' => $harga,
            'jumlah_kg' => $jumlah,
            'keterangan' => $keterangan,
            'url_foto' => $url_foto,
        ]);

        if($new) {
            return 'berhasil';
        } else {
            return 'gagal';
        }
    }

    public function get()
    {
        return Panen::with(['karyawan' => function($query) {
            $query->select('id','nama');
        }])->orderBy('updated_at', 'desc')->get()->toJson();
    }
}
