<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientController extends Controller
{
    public function home(){
        return view("client.index");
    }

    public function wisata(){
        return view("client.wisata");
    }

    public function konservasi(){
        return view("client.konservasi");
    }

    public function restarea(){
        return view("client.restarea");
    }

    public function lokasi(){
        return view("client.lokasi");
    }
}
