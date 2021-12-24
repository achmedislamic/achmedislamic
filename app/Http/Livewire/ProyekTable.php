<?php

namespace App\Http\Livewire;

use App\Models\Proyek;
use Livewire\Component;

class ProyekTable extends Component
{
    public function render()
    {
        $proyeks = Proyek::orderBy('judul')->paginate();
        return view('livewire.proyek-table', compact('proyeks'));
    }
}
