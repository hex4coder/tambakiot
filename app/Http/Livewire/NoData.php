<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NoData extends Component
{
    public $image_url = 'img/nodata.svg';
    public $title = 'Opps..!';
    public $description = 'Belum ada data.';

    public function render()
    {
        return view('livewire.no-data');
    }
}
