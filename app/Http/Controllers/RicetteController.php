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
        $storeRicette = $request->validate([
            'codiceArticolo',
            'lunghezzaPacco',
            'spaziatura',
            'velocitàNastri',
            'soffiettoOn',
            'disabilitazioneConsensoValle',
            'monopiegatore',
            'pareggiatore',
            'disabilitazioneConsensoUscita',
            'ritardoPartenza',
            'durataCorsaAvanti',
            'disimpegnoFotocellula',
            'tempoSaldatura',
            'anticipoSaldatura',
            'centratura',
            'anticipoStopNastroUscita',
            'altezzaBarra',
            'maxVelocitàRitornoBarra',
            'tempoAperturaBarra',
            'evacuazioneTappetoUscita',
            'saldatoreLaterale',
            'fotocellule',
            'tappetiAvvicinabili',

            // Simatec HMI

            'fotocellulaCanaleUnoAlto',
            'fotocellulaCanaleUnoBasso',
            'fotocellulaCanaleDueAlto',
            'fotocellulaCanaleDueBasso',
            'fotocellulaCanaleTreAlto',
            'fotocellulaCanaleTreBasso',
            'fotocellulaConteggioAlto',
            'fotocellulaConteggioBasso',
            'velocitàIngressoAlto',
            'velocitàIngressoBasso',
            'velocitàCingholiAlto',
            'velocitàCingholiBasso',
            'velocitàCentraleAlto',
            'velocitàCentraleBasso',
            'velocitàUscitaAlto',
            'velocitàUscitaBasso',
            'canaliAttivi',
            'cambioCanale',
            'capienzaCanale',
            'uscitaCanale',
            'bypassMonte',
            'bypassValle',
            'modalitàSoloNastriDiverter',
            'controlloRibaltamentoRotoli',
            'caricoNastroCentralePasso',
            'abilitàUscitaBlocchi',
            'mettietichettaFermaNastro',
            'tempoRitardoUnoColla',
            'tempoRitardoDueColla',
            'tempoDurataColla',
            'quotaPosizioneEncoder',
            'ritardoPartenzaTampone',
            'quotaPosizioneTampone',
            'quotaAnticipoStopVuota',
            'tempoAttesaRitorno',
            'pareggiatoreHMI',
            'ritardoPartenzaHMI',
            'durataAllineamento',
            'transitoUscitaNastroUsc',
            'fotocellulaConteggioHMI',
            'presenzaSuBloccoUno',
            'tempoDurataCollaHMI',
            'ritardoAperturaBlocchi',
            'transitoUscitaApBloccoUno',
            'transitoUscitaChBloccoDue',
            'posizioneCanaleUno',
            'posizioneCanaleDue',
            'posizioneCanaleTre',
            'posizioneCanaleQuattro'
        ]);

        $ricetta = Ricette::create($storeRicette);

        return redirect('ricette.storericette')->with('completato', 'i parametri sono stati salvati');
    }

    public function showParam($id)
    {
        $ricetta = ricette::findOrFail($id);
        return view('ricette.ricetta', compact('ricetta'));
    }
}
