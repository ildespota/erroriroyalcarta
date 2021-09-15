@extends('layouts.app')

@section('content')
<h1>Parametri Pannelli</h1>

@foreach ($ricette as $ricetta)

<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#{{$ricetta->codiceArticolo}}">
    {{$ricetta->codiceArticolo}}
</button>

<div class="collapse" id="{{$ricetta->codiceArticolo}}">
    <div class="row">
        <div class="col-md-4 ">
            <h2>Articolo: {{$ricetta->codiceArticolo}}</h2>
            <h4>Simatec Panel Touch:</h4>
            <p><b>lunghezza pacco:</b> {{$ricetta->lunghezzaPacco}}</p>
            <p><b>spaziatura:</b> {{$ricetta->spaziatura}}</p>
            <p><b>velocità nastri:</b> {{$ricetta->velocitàNastri}} </p>
            <p><b>soffietto on :</b> {{$ricetta->soffiettoOn}}</p>
            <p><b>evacuazione tappeto uscita:</b>{{$ricetta->evacuazioneTappetoUscita}}</p>
            <p><b>disabilitazione consenso valle:</b>{{$ricetta->disabilitazioneConsensoValle}}</p>
            <p><b>monopiegatore:</b> {{$ricetta->monopiegatore}}</p>
            <p><b>pareggiatore:</b>{{$ricetta->pareggiatore}}</p>
            <p><b>disabilitazione consenso uscita:</b>{{$ricetta->disabilitazioneConsensoUscita}}</p>
            <p><b>ritardo partenza:</b>{{$ricetta->partenza}}</p>
            <p><b>durata corsa avanti:</b> {{$ricetta->durataCorsaAvanti}}</p>
            <p><b>Disimpegno Fotocelulla:</b>{{$ricetta->disimpegnoFotocellula}} </p>
            <p><b>Tempo saldatura:</b>{{$ricetta->tempoSaldatura}}</p>
            <p><b>Anticipo Saldatura:</b>{{$ricetta->anticipoSaldatura}}</p>
            <p><b>Centratura:</b>{{$ricetta->centratura}}</p>
            <p><b>Anticipo Stop Nastro Uscita:</b>{{$ricetta->anticipoStopNastroUscita}}</p>
            <p><b>Altezza barra:</b>{{$ricetta->altezzaBarra}}</p>
            <p><b>Max velocità ritorno barra:</b>{{$ricetta->maxVelocitàRitornoBarra}}</p>
            <p><b>Tempo apertura barra:</b>{{$ricetta->tempoAperturaBarra}}</p>
            <p><b>Evacuazione Tappeto Uscita:</b>{{$ricetta->evacuazioneTappetoUscita}}</p>
            <p><b>Saldatore Laterale:</b>{{$ricetta->saldatoreLaterale}}</p>
            <p><b>Fotocellule:</b>{{$ricetta->fotocellule}}</p>
            <p><b>Tappeti Avvicinabili:</b>{{$ricetta->tappetiAvvicinabili}}</p>
        </div>
        <div class=" col-md-4">
            <h4>Simatec HMI</h4>
            <p><b>fotocellula canale 1:</b></p>
            <p><b>fotocellula canale 2:</b></p>
            <p><b>fotocellula canale 3:</b></p>
            <p><b>fotocellula conteggio:</b></p>
            <p><b>velocità ingresso:</b></p>
            <p><b>velocità cingholi:</b></p>
            <p><b>velocità centrale:</b></p>
            <p><b>velocità uscita:</b></p>
            <p><b>canali attivi:</b></p>
            <p><b>cambio canale:</b></p>
            <p><b>capienza canale:</b></p>
            <p><b>uscita canale:</b></p>
            <p><b>by-pass consenso a monte:</b></p>
            <p><b>by-pass consenso da valle:</b></p>
            <p><b>Modalità SOLO NASTRI diverter:</b></p>
            <p><b>Controllo ribaltamento rotoli:</b></p>
            <p><b>Carico nastro centrale a passo:</b></p>
            <p><b>Abilita uscita da blocchi:</b></p>
            <p><b>Mettietichetta ferma nastro:</b></p>
            <p><b>Tempo ritardo 1 colla:</b></p>
            <p><b>Tempo ritardo 2 colla:</b></p>
            <p><b>Tempo durata colla:</b></p>
            <p><b>Ritardo tampone:</b></p>
            <p><b>Ritardo partenza tampone:</b></p>
            <p><b>Quota posizione Tampone:</b></p>
        </div>
        <div class="col-md-4">
            <p><b>Quota anticipo stop vuota:</b></p>
            <p><b>Tempo Attesa Ritorno:</b></p>
            <p><b>Pareggiatore:</b></p>
            <p><b>Ritardo partenza:</b></p>
            <p><b>Durata allineamento:</b></p>
            <p><b>Transito uscita nastro usc:</b></p>
            <p><b>Fotocellula conteggio:</b></p>
            <p><b>Presenza su blocco uno:</b></p>
            <p><b>Tempo durata colla:</b></p>
            <p><b>Ritardo Apertura Blocchi:</b></p>
            <p><b>Transito Uscita AP blocco 2:</b></p>
            <p><b>Transito Uscita CH blocco 2:</b></p>
            <p><b>Posizione canale 1:</b></p>
            <p><b>Posizione canale 2:</b></p>
            <p><b>Posizione canale 3:</b></p>
            <p><b>Posizione canale 4:</b></p>
        </div>
    </div>
</div>
@endforeach

@endsection