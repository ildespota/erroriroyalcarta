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

    public function createManutenzioni()
    {
        return view('createmanutenzioni');
    }
    public function storeManutenzioni(Request $request)
    {
        $storeManutenzioni = $request->all();
        Manutenzioni::create($storeManutenzioni);
        return redirect()->back()->with(['message' => 'Manutenzione Salvata', 'alert' => 'alert-success']);
    }
}
