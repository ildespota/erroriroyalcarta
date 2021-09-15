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
    public function storericette()
    {
        return view('ricette.storericette');
    }
}
