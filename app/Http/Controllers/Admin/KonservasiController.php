<?php

namespace App\Http\Controllers\Admin;

use App\Models\Konservasi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KonservasiController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $konservasi = Konservasi::all();
        return view('admin.konservasi.index', compact('konservasi'));
    }

    public function create()
    {
        return view('admin.konservasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->gambar->extension();  
        $request->gambar->move(public_path('konservasi'), $imageName);

        Konservasi::create([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'gambar' => $imageName,
        ]);

        return redirect()->route('konservasi.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function show(Konservasi $konservasi)
    {
        //
    }

    public function edit(Konservasi $konservasi)
    {
        return view('admin.konservasi.edit', compact('konservasi'));
    }

    public function update(Request $request, Konservasi $konservasi)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        if ($request->hasFile('gambar')) {
            $imageName = time().'.'.$request->gambar->extension();  
            $request->gambar->move(public_path('konservasi'), $imageName);
            $konservasi->gambar = $imageName;
        }
    
        $konservasi->nama = $request->nama;
        $konservasi->keterangan = $request->keterangan;
        $konservasi->save();
    
        return redirect()->route('konservasi.index')->with('success', 'Data berhasil diubah');
    }
    
}