<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak.index', [
            'kontaks' => Kontak::all(),
        ]);
    }
}
