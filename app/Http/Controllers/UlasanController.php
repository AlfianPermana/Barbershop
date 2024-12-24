<?php

namespace App\Http\Controllers;
use App\Models\ulasan;
use App\Models\service;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class UlasanController extends Controller
{

    public function input(Request $request)
    {
        Validator::make($request->all(), [
            'nama' => 'required',
            'telepon' => 'required' | 'numeric' | 'min:10' | 'max:12',
            'heading' => 'required',
            'bintang' => 'required',
            'ulasan' => 'required',
        ]);

        ulasan::create([
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'heading' => $request->heading,
            'bintang' => $request->bintang,
            'ulasan' => $request->ulasan,
        ]);

        return redirect()->route('home')->with('success', 'Ulasan berhasil dikirim');
    }
}
