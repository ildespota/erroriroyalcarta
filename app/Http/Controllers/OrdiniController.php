<?php

namespace App\Http\Controllers;

use app\Models\ordini;
use Illuminate\Http\Request;

class OrdiniController extends Controller
{
    public function indexricette()
    {
        $ricette = ordini::all();
        return view('ordini', compact('ricette'));
    }
}
