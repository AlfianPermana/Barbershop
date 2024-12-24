<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pricelist;
use Illuminate\Support\Facades\Validator;

class PricelistController extends Controller
{
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'nama_paket' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
        ]);

        pricelist::create([
            'nama_paket' => $request->nama_paket,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        return redirect()->route('home')->with('success', 'Data berhasil disimpan');
    }
}
