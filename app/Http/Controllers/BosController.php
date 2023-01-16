<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BosController extends Controller
{
    
    public function getBos($id)
    {
        $user = User::find($id);
        if($user) {
            return json_encode($user);
        } else {
            return 'no-data';
        }
    }
}
