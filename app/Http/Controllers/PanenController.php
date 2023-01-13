<?php

namespace App\Http\Controllers;

use App\Models\Panen;
use Illuminate\Http\Request;

class PanenController extends Controller
{
    public function index()
    {
        return view('panen');
    }

    public function get()
    {
        return Panen::with(['karyawan' => function($query) {
            $query->select('id','nama');
        }])->orderBy('updated_at', 'desc')->get()->toJson();
    }
}
