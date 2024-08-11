<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       $type = Type::all();
        return view('admin.Type.index', compact('Type'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Type$type)
    {
        //
    }

    public function edit(Type$type)
    {
        //
    }

    public function update(Request $request, Type$type)
    {
        //
    }

    public function destroy(Type$type)
    {
        //
    }
}
