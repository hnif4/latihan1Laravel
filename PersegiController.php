<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersegiController extends Controller
{
    public function showForm()
    {
        return view('hitung_persegi');
    }

    public function hitung(Request $request)
    {
        $sisi = $request->input('sisi');

        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi;

        return view('hitung_persegi', compact('sisi', 'luas', 'keliling'));
    }
}
