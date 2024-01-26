<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LingkaranController extends Controller
{
    public function showForm()
    {
        return view('hitung_lingkaran');
    }

    public function hitung(Request $request)
    {
        $jariJari = $request->input('jari_jari');

        $luas = 3.14 * $jariJari * $jariJari;

        return view('hitung_lingkaran', compact('jariJari', 'luas'));
    }
}
