<?php

namespace App\Http\Controllers;

use  App\Models\Ricette;
use Illuminate\Http\Request;

class RicetteController extends Controller
{
    public function indexricette()
    {
        $ricette = Ricette::all();
        return view('welcome', compact('ricette'));
    }

    public function crearicette()
    {
        return view('ricette.crearicette');
    }
    public function storericette(Request $request)
    {
        $storeRicette = $request->all();
        Ricette::create($storeRicette);
        return view('ricette.storericette');
    }

    public function showParam($id)
    {
        $ricetta = ricette::findOrFail($id);
        return view('ricette.ricetta', compact('ricetta'));
    }
}
