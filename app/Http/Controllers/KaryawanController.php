<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        return view('karyawan');
    }

    public function login(Request $request) {
        $request->headers->set('Accept', 'application/json');
        $username = $request->username;  // nama karyawan
        $password = $request->password;  // kode device / alat

        $karyawan = Karyawan::where('nama', $username)->first();
        $ret = [
            'message' => 'Login not valid',
            'type' => 'error'
        ];
        if($karyawan) {
            if($karyawan->kode == $password) {
                $ret = [
                    'message' => 'Login berhasil',
                    'type' => 'success',
                    'data' => $karyawan,
                ];      
            } else {
                $ret['message'] = 'Password tidak valid';
            }
        } 
        return json_encode($ret);
    }

    public function get(Request $request) {
        $data = Karyawan::get();

        if($request->input('user_id')) {
            $data = Karyawan::where('user_id', $request->input('user_id'))->get();
        }

        if($request->input('id')) {
            $data = Karyawan::find($request->input('id'));
        }

        return json_encode($data);
    }
}