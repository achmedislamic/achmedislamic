<?php

namespace App\Http\Livewire;

use Livewire\Component;

final class KodeDiskon extends Component
{
    public $harga = 'Rp. 1.300.000';
    public $kodeDiskon = '';
    public $href = 'https://api.whatsapp.com/send?phone=6282230925988&text=Hai!%20Saya%20ingin%20memesan%20situs%20web.%20Deskripsinya%20adalah';

    public function simpan()
    {
        $this->validate([
            'kodeDiskon' => 'required|string|max:14'
        ]);
        
        if($this->kodeDiskon == 'SIAP ONLINE' || $this->kodeDiskon == 'siap online'){
            $this->harga = '<span class="line-through">Rp. 1.300.000</span> Rp. 1.200.000';

            $this->href = 'https://api.whatsapp.com/send?phone=6282230925988&text=Hai!%20Saya%20ingin%20memesan%20situs%20web%20dengan%20kode%20diskon%20SIAP%20ONLINE.%20Deskripsinya%20adalah%20';

            $this->render();
        }
    }
    public function render()
    {
        return view('livewire.kode-diskon');
    }
}
