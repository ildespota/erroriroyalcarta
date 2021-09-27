<?php

namespace App\Http\Controllers;

use App\Models\ordini;
use Illuminate\Http\Request;

class OrdiniController extends Controller
{
    public function indexordini()
    {
        $ordini = ordini::all();
        return view('ordini.indexordini', compact('ordini'));
    }
    public function cercaordini(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('search');


        // Search in the title and body columns from the posts table

        $cercaordini = ordini::query()
            ->where('materiaPrima', 'LIKE', "%{$search}%")
            ->orWhere('nostroCodiceArticolo', 'LIKE', "%{$search}%")
            ->orWhere('cliente', 'LIKE', "%{$search}%")
            ->get();





        // Return the search view with the resluts compacted
        return view('ordini.cercaordini', compact('cercaordini'));
    }

    public function cercaAltezza(Request $request)
    {
        $rangeAltezza = $request->input('rangeAltezza');

        $cercaAltezza = ordini::query()
            ->where('altezzaRotolo', '>', $rangeAltezza)
            ->get();

        return view('ordini.cercaAltezza', compact('cercaAltezza'));
    }

    public function show($id)
    {
        $ordine = ordini::findOrFail($id);
        return view('ordini.ordine', compact('ordine'));
    }
}
