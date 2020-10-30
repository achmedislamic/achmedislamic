<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kontak;

class FormulirKontak extends Component
{
    public $nama;
    public $email;
    public $pesan;

    protected $rules = [
        'nama' => 'required|min:3',
        'email' => 'required|email',
        'pesan' => 'required|min:5'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function simpan()
    {
        $validatedData = $this->validate();

        Kontak::create($validatedData);

        session()->flash('message', 'Pesan telah dikirim. Tunggu balasan di email anda yah!');

        $this->reset(['nama', 'email', 'pesan']);
    }
    public function render()
    {
        return view('livewire.formulir_kontak');
    }

    public function getKontakProperty()
    {
        return Kontak::find(1);
    }

    public function hapus()
    {
        $this->kontak->delete();
    }
}
