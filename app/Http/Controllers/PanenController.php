<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanenController extends Controller
{
    public function index()
    {
        return view('panen');
    }
}
