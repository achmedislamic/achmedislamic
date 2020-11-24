<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyek;

class ProyekController extends Controller
{
    public function index()
    {
        return view('proyek.index', [
            'proyeks' => Proyek::all(),
        ]);
    }

    public function tambah()
    {
        return view('proyek.tambah');
    }

    public function ubah(Proyek $proyek)
    {
        return view('proyek.tambah', [
            'proyek' => $proyek,
            'judul' => 'Ubah Proyek'
        ]);
    }

    protected function validasiData(){
        return request()->validate([
            'proyek_id' => 'required|integer'
        ]);
    }

    public function hapus()
    {
        $this->validasiData();

        Proyek::destroy(request('proyek_id'));

        return redirect()->route('proyek');
    }
}
