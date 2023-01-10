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

    public function get(Request $request)
    {
        return Panen::all()->toJson();
    }
}
