<?php

namespace App\Http\Controllers;

use App\Models\errori;
use Illuminate\Http\Request;

class ControllerErrori extends Controller
{
    public function index()
    {
        $errori = errori::all();
        return view('welcome', compact('errori'));
    }

    public function creaerrore()
    {
        return view('creaerrore');
    }

    public function aggiungierrore(Request $req)
    {
        $tutto = $req->input();
        $p = errori::create($tutto);
        return view('aggiungierrore');
        dd($p);
    }
}
