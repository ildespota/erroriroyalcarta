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
        return view('ordini.cercaordini', compact('cercaordini', 'search'));
    }

    public function cercaAltezza(Request $request)
    {
        $rangeAltezza = $request->input('rangeAltezza');

        $cercaAltezza = ordini::query()
            ->where('altezzaRotolo', '>', $rangeAltezza)
            ->get();

        return view('ordini.cercaAltezza', compact('cercaAltezza', 'rangeAltezza'));
    }

    public function cercaAnima(Request $request)
    {
        $cercaAnima = $request->input('cercaAnima');

        $indexAnima = ordini::query()
            ->where('tipoAnima', 'LIKE', "%{$cercaAnima}%")
            ->get();

        return view('ordini.cercaAnima', compact('cercaAnima', 'indexAnima'));
    }
    public function cercaDiametro(Request $request)
    {
        $cercaDiametro = $request->input('cercaDiametro');

        $indexDiametro = ordini::query()
            ->where('diametroRotolo', '>', $cercaDiametro)
            ->get();

        return view('ordini.cercaDiametro', compact('cercaDiametro', 'indexDiametro'));
    }
    public function cercaCodice(Request $request)
    {
        $cercaCodice = $request->input('cercaCodice');
        $indexCodice = ordini::query()
            ->where('codiceABarre', 'LIKE', "%{$cercaCodice}%")
            ->get();
        return view('ordini.cercaCodici', compact('cercaCodice', 'indexCodice'));
    }

    public function ordiniPerCliente()
    {
        $numeroColli = ordini::all();

        return view('ordini.ordiniPerCliente', compact('numeroColli'));
    }

    public function show($id)
    {
        $ordine = ordini::findOrFail($id);
        return view('ordini.ordine', compact('ordine'));
    }
}
