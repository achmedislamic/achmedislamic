<?php

namespace App\Http\Livewire;

use Illuminate\View\View;
use Livewire\Component;

final class PembuatanSitus extends Component
{
    public function render(): View
    {
        return view('livewire.pembuatan-situs')->layout('layouts.guest');
    }
}
