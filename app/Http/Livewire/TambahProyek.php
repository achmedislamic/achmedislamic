<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proyek;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class TambahProyek extends Component
{
    use WithFileUploads;

    public $judul;
    public $deskripsi;
    public $url;
    public $alamat_submit = 'simpan';
    public $proyek_id;
    public $proyek_terpilih;
    public $gambar;

    protected $rules = [
        'judul' => 'required|min:5',
        'deskripsi' => 'required|min:5',
        'url' => 'min:10|url',
        'gambar' => 'image|max:1024',
    ];

    public function mount($proyek = null)
    {
        if($proyek != null){
            $this->judul = $proyek->judul;
            $this->deskripsi = $proyek->deskripsi;
            $this->proyek_id = $proyek->id;
            $this->url = $proyek->url;
            $this->gambar = $proyek->gambar;
            $this->alamat_submit = 'ubah';
        }
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

        $proyek->gambar = $this->gambar->store('gambar', 'public');

        $proyek->save();

        return redirect()->route('proyek');
    }

    public function ubah()
    {
        if($this->proyek_id) {
            $proyek = Proyek::find($this->proyek_id);
            
            $store = [
                'judul'     => $this->judul,
                'deskripsi'   => $this->deskripsi,
                'url' => $this->url
            ];

            if($this->gambar){
                $isSuccess = Storage::disk('public')->delete($proyek->gambar);
                if($isSuccess){
                    $store['gambar'] = $this->gambar->store('gambar', 'public');
                }
            }

            $proyek->update($store);

        }

        return redirect()->route('proyek');
    }

    public function render()
    {
        return view('livewire.tambah-proyek');
    }
}
