<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyek;

class BerandaController extends Controller
{
    public function index()
    {
        return view('beranda', [
            'proyeks' => Proyek::all()
        ]);
    }
}
