<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ricette extends Model
{
    use HasFactory;

    protected $fillable = [
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
    ];
}
