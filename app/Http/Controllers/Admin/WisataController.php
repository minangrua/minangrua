<?php

namespace App\Http\Controllers\Admin;

use App\Models\Wisata;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    //public function __construct()
   /// {
   //     $this->middleware('auth');
   // }

    public function index()
    {
        $wisata = Wisata::all();
        return view('admin.wisata.index', compact('wisata'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Wisata $wisata)
    {
        //
    }

    public function edit(Wisata $wisata)
    {
        //
    }

    public function update(Request $request, Wisata $wisata)
    {
        //
    }

    public function destroy(Wisata $wisata)
    {
        //
    }
}
