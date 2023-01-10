<?php

namespace App\Http\Livewire;

use App\Models\Panen;
use Livewire\Component;

class ListPanenFront extends Component
{
    public function render()
    {
        $data = Panen::get();

        return view('livewire.list-panen-front', [
            'data' => $data,
        ]);
    }
}
