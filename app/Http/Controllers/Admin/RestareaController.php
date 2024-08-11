<?php

namespace App\Http\Controllers\Admin;

use App\Models\Restarea;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RestareaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $restarea = Restarea::all();
        return view('admin.restarea.index', compact('restarea'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Restarea $restarea)
    {
        //
    }

    public function edit(Restarea $restarea)
    {
        //
    }

    public function update(Request $request, Restarea $restarea)
    {
        //
    }

    public function destroy(Restarea $restarea)
    {
        //
    }
}
