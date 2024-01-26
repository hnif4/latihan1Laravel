<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SegitigaController extends Controller
{
    public function showForm()
    {
        return view('hitung_segitiga');
    }

    public function hitung(Request $request)
    {
        $alas = $request->input('alas');
        $tinggi = $request->input('tinggi');
        $sisi1 = $request->input('sisi1');
        $sisi2 = $request->input('sisi2');
        $sisi3 = $request->input('sisi3');

        $luas = 0.5 * $alas * $tinggi;
        $keliling = $sisi1 + $sisi2 + $sisi3;

        return view('hitung_segitiga', compact('alas', 'tinggi', 'sisi1', 'sisi2', 'sisi3', 'luas', 'keliling'));
    }
}
