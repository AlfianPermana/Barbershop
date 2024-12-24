<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
use App\Models\ulasan;
use App\Models\pricelist;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{

    public function index()
    {
        $ulasan = ulasan::paginate(5);
        $kategori = Kategori::paginate(4);
        $pricelist = pricelist::all();

        return view('home', compact('ulasan', 'kategori', 'pricelist'));
    }

    public function store(Request $request)
    {

        Validator::make($request->all(), [
            'name_kategori' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,|max:2048',
        ]);

        $service = new kategori();
        $service->nama_kategori = $request->nama_kategori;
        $service->deskripsi = $request->deskripsi;


        if ($request->hasFile('image')) {
            // Pindahkan file gambar ke folder public/gambarbarang/
            $request->file('image')->move(public_path('gambarbarang/'), $request->file('image')->getClientOriginalName());
            $service->image = $request->file('image')->getClientOriginalName();

        }
        $service->save();

        return redirect()->route('home')->with('success', 'Data berhasil disimpan');
    }
}
