<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    public function index()
    {
        return view('resume.index');
    }

    public function pdf()
    {
        return Storage::disk('public')->download('document/resume.pdf');
    }
}
