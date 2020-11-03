<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proyek;

class TambahProyek extends Component
{
    public $judul;
    public $deskripsi;

    protected $rules = [
        'judul' => 'required|min:5',
        'deskripsi' => 'required|min:5'
    ];

    public function mount($proyek)
    {
        $this->judul = $proyek->judul;
        $this->deskripsi = $proyek->deskripsi;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function simpan()
    {
        $data_tervalidasi = $this->validate();
        
        $proyek = new Proyek($data_tervalidasi);

        $proyek->user_id = auth()->user()->id;

        $proyek->save();

        return redirect()->route('proyek');
    }

    public function render()
    {
        return view('livewire.tambah-proyek');
    }
}
