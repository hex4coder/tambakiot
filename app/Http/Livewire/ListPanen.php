<?php

namespace App\Http\Livewire;

use App\Models\Panen;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ListPanen extends Component
{
    public function render()
    {
        return view('livewire.list-panen', [
            'data' => Panen::with(['karyawan' => function ($query) {
                $query->where('user_id', Auth::id());
            },])->paginate(5)
        ]);
    }
}
