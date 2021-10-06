<?php

namespace App\Http\Controllers;

use App\Models\Manutenzioni;
use Illuminate\Http\Request;

class ManutenzioniController extends Controller
{
    public function indexManutenzioni()
    {
        $manutenzioni = Manutenzioni::all();
        return view('manutenzioni', compact('manutenzioni'));
    }
}
