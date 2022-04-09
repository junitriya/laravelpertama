<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index ()
    {
        return 'test berhasil';
    }

    public function urutan ($ke)
    {

        $numbers = ['ke' => $ke, 'nomor' => 20];
        return view('urutan', ['numbers' => $numbers]);
    }

    public function coba ($ke)
    {
        return view('coba', ['ke' => $ke]);
    }
}