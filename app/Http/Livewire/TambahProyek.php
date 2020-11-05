<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proyek;

class TambahProyek extends Component
{
    public $judul;
    public $deskripsi;
    public $alamat_submit = 'simpan';
    public $proyek_id;
    public $proyek_terpilih;

    protected $rules = [
        'judul' => 'required|min:5',
        'deskripsi' => 'required|min:5'
    ];

    public function mount($proyek = null)
    {
        if($proyek != null){
            $this->judul = $proyek->judul;
            $this->deskripsi = $proyek->deskripsi;
            $this->proyek_id = $proyek->id;
            $this->alamat_submit = 'ubah';
        }
    }

    public function simpan()
    {
        $data_tervalidasi = $this->validate();
        
        $proyek = new Proyek($data_tervalidasi);

        $proyek->user_id = auth()->user()->id;

        $proyek->save();

        return redirect()->route('proyek');
    }

    public function ubah()
    {
        if($this->proyek_id) {

            Proyek::find($this->proyek_id)->update([
                'judul'     => $this->judul,
                'deskripsi'   => $this->deskripsi
            ]);
        }

        return redirect()->route('proyek');
    }

    public function render()
    {
        return view('livewire.tambah-proyek');
    }
}
