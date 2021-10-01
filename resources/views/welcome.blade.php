@extends('layouts.app')

@section('content')
<h1>Parametri Pannelli Al Confezionamento</h1>

@foreach ($ricette as $ricetta)


<button class="btn btn-primary btn-lg btn-block my-3" type="button" data-toggle="collapse" data-target="#{{$ricetta->codiceArticolo}}">
    {{$ricetta->codiceArticolo}}
</button>


<div class="row collapse" id="{{$ricetta->codiceArticolo}}">
    <h2 class="col-12 text-center text-danger">Articolo: {{$ricetta->codiceArticolo}}</h2>
    <div class="col-md-4">
        <ul class="list-group list-group-flush">
            <li class="list-group-item  list-group-item-info">
                <h4>Simatec Panel Touch:</h4>
            </li>
            <li class="list-group-item"><b>Lunghezza pacco:</b> {{$ricetta->lunghezzaPacco}} mm</p>
            </li>
            <li class="list-group-item">
                <b>Spaziatura:</b> {{$ricetta->spaziatura}} mm
            </li>
            <li class="list-group-item">
                <b>Velocità nastri:</b> {{$ricetta->velocitàNastri}} m/min
            </li>
            <li class="list-group-item">
                <b>Soffietto on :</b> <span class="checkbool">{{$ricetta->soffiettoOn}}</span>
            </li>
            <li class="list-group-item">
                <b>Evacuazione tappeto uscita:</b>{{$ricetta->evacuazioneTappetoUscita}} s
            </li>
            <li class="list-group-item">
                <b>Disabilitazione consenso valle:</b> <span class="checkbool">{{$ricetta->disabilitazioneConsensoValle}}</span>
            </li>
            <li class="list-group-item">
                <b>Monopiegatore:</b> <span class="checkbool">{{$ricetta->monopiegatore}}</span>
            </li>
            <li class="list-group-item">
                <b>Pareggiatore:</b> <span class="checkbool">{{$ricetta->pareggiatore}}</span>
            </li>
            <li class="list-group-item">
                <b>Disabilitazione consenso uscita:</b> <span class="checkbool">{{$ricetta->disabilitazioneConsensoUscita}}</span>
            </li>
            <li class="list-group-item">
                <b>Ritardo partenza:</b>{{$ricetta->ritardoPartenza}} s
            </li>
            <li class="list-group-item">
                <b>Durata corsa avanti:</b> {{$ricetta->durataCorsaAvanti}} s
            </li>
            <li class="list-group-item">
                <b>Disimpegno Fotocelulla:</b> {{$ricetta->disimpegnoFotocellula}} s
            </li>
            <li class="list-group-item">
                <b>Tempo saldatura:</b> {{$ricetta->tempoSaldatura}} L/100
            </li>
            <li class="list-group-item">
                <b>Anticipo Saldatura:</b>+{{$ricetta->anticipoSaldatura}}%
            </li>
            <li class="list-group-item">
                <b>Centratura:</b> {{$ricetta->centratura}} mm
            </li>
            <li class="list-group-item">
                <b>Anticipo Stop Nastro Uscita:</b> {{$ricetta->anticipoStopNastroUscita}} mm
            </li>
            <li class="list-group-item">
                <b>Altezza barra:</b> {{$ricetta->altezzaBarra}}
            </li>
            <li class="list-group-item">
                <b>Max velocità ritorno barra:</b> {{$ricetta->maxVelocitàRitornoBarra}}%
            </li>
            <li class="list-group-item">
                <b>Tempo apertura barra:</b> {{$ricetta->tempoAperturaBarra}} s
            </li>
            <li class="list-group-item">
                <b>Evacuazione Tappeto Uscita:</b> {{$ricetta->evacuazioneTappetoUscita}} s
            </li>
            <li class="list-group-item">
                <b>Saldatore Laterale:</b> {{$ricetta->saldatoreLaterale}}
            </li>
            <li class="list-group-item">
                <b>Fotocellule:</b> {{$ricetta->fotocellule}}
            </li>
            <li class="list-group-item">
                <b>Tappeti Avvicinabili:</b> <span class="checkbool">{{$ricetta->tappetiAvvicinabili}}</span>
            </li>
        </ul>


    </div>
    <div class="col-md-4">
        <ul class="list-group list-group-flush">
            <li class="list-group-item  list-group-item-info">
                <h4>Simatec HMI</h4>
            </li>
            <li class="list-group-item"> <b>Fotocellula canale 1 Alto:</b> {{$ricetta->fotocellulaCanaleUnoAlto}}</li>
            <li class="list-group-item"> <b>Fotocellula canale 1 Basso:</b> {{$ricetta->fotocellulaCanaleUnoBasso}}</li>
            <li class="list-group-item"> <b>Fotocellula canale 2 Alto:</b> {{$ricetta->fotocellulaCanaleDueAlto}}</li>
            <li class="list-group-item"> <b>Fotocellula canale 2 Basso:</b> {{$ricetta->fotocellulaCanaleDueBasso}}</li>
            <li class="list-group-item"> <b>Fotocellula canale 3 Alto:</b> {{$ricetta->fotocellulaCanaleTreAlto}}</li>
            <li class="list-group-item"> <b>Fotocellula canale 3 Basso:</b>{{$ricetta->fotocellulaCanaleTreBasso}}</li>
            <li class="list-group-item"> <b>Fotocellula conteggio Alto:</b> {{$ricetta->fotocellulaConteggioAlto}}</li>
            <li class="list-group-item"> <b>Fotocellula conteggio Basso:</b> {{$ricetta->fotocellulaConteggioBasso}}</li>
            <li class="list-group-item"> <b>Velocità ingresso Alto :</b> {{$ricetta->velocitàIngressoAlto}} mt/min</li>
            <li class="list-group-item"> <b>Velocità ingresso Basso :</b> {{$ricetta->velocitàIngressoBasso}} mt/min</li>
            <li class="list-group-item"> <b>Velocità cingholi Alto:</b> {{$ricetta->velocitàCingholiAlto}}</li>
            <li class="list-group-item"> <b>Velocità cingholi Basso:</b> {{$ricetta->velocitàCingholiBasso}}</li>
            <li class="list-group-item"> <b>Velocità centrale Alto:</b> {{$ricetta->velocitàCentraleAlto}} </li>
            <li class="list-group-item"> <b>Velocità centrale Basso:</b> {{$ricetta->velocitàCentraleBasso}}</li>
            <li class="list-group-item"> <b>Velocità uscita Alto:</b> {{$ricetta->velocitàUscitaAlto}}</li>
            <li class="list-group-item"> <b>Velocità uscita Basso:</b> {{$ricetta->velocitàUscitaAlto}}</li>
            <li class="list-group-item"> <b>Canali attivi:</b> {{$ricetta->canaliAttivi}}</li>
            <li class="list-group-item"> <b>Cambio canale:</b> {{$ricetta->cambioCanale}}</li>
            <li class="list-group-item"> <b>Capienza canale:</b> {{$ricetta->capienzaCanale}}</li>
            <li class="list-group-item"> <b>Uscita canale:</b> {{$ricetta->uscitaCanale}}</li>
            <li class="list-group-item"> <b>By-pass consenso a monte:</b> <span class="checkbool">{{$ricetta->bypassMonte}}<span></li>
            <li class="list-group-item"> <b>By-pass consenso da valle:</b> <span class="checkbool">{{$ricetta->bypassValle}}</span></li>
            <li class="list-group-item"> <b>Modalità SOLO NASTRI diverter:</b> <span class="checkbool">{{$ricetta->modalitàSoloNastriDiverter}}</span></li>

        </ul>
    </div>
    <div class="col-md-4">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"> <b>Carico nastro centrale a passo:</b> <span class="checkbool">{{$ricetta->caricoNastroCentralePasso}}</span></li>
            <li class="list-group-item"><b>Abilita uscita da blocchi:</b> <span class="checkbool">{{$ricetta->abilitàUscitaBlocchi}}</span> </li>
            <li class="list-group-item"><b>Mettietichetta ferma nastro:</b> <span class="checkbool">{{$ricetta->mettietichettaFermaNastro}}</span></li>
            <li class="list-group-item"><b>Tempo ritardo 1 colla:</b> {{$ricetta->tempoRitardoUnoColla}} s</li>
            <li class="list-group-item"><b>Tempo ritardo 2 colla:</b> {{$ricetta->tempoRitardoDueColla}} s</li>
            <li class="list-group-item"><b>Tempo durata colla:</b> {{$ricetta->tempoDurataColla}} s</li>
            <li class="list-group-item"><b>Quota posizione encoder:</b> {{$ricetta->quotaPosizioneEncoder}} mm</li>
            <li class="list-group-item"><b>Ritardo partenza tampone:</b> {{$ricetta->ritardoPartenzaTampone}} s</li>
            <li class="list-group-item"><b>Quota posizione Tampone:</b> {{$ricetta->quotaPosizioneTampone}} mm</li>
            <li class="list-group-item"><b>Quota anticipo stop vuota:</b> {{$ricetta->quotaAnticipoStopVuota}} mm</li>
            <li class="list-group-item"><b>Tempo Attesa Ritorno:</b> {{$ricetta->tempoAttesaRitorno}} s</li>
            <li class="list-group-item"><b>Pareggiatore:</b> <span class="checkbool">{{$ricetta->pareggiatoreHMI}}</span></li>
            <li class="list-group-item"><b>Ritardo partenza:</b> {{$ricetta->ritardoPartenza}} s</li>
            <li class="list-group-item"><b>Durata allineamento:</b> {{$ricetta->durataAllineamento}} s</li>
            <li class="list-group-item"><b>Transito uscita nastro usc:</b> {{$ricetta->transitoUscitaNastroUsc}} s</li>
            <li class="list-group-item"><b>Presenza su blocco uno:</b> {{$ricetta->presenzaSuBloccoUno}} s</li>
            <li class="list-group-item"><b>Ritardo Apertura Blocchi:</b> {{$ricetta->ritardoAperturaBlocchi}} s</li>
            <li class="list-group-item"><b>Transito Uscita AP blocco 2:</b> {{$ricetta->transitoUscitaApBloccoUno}} s</li>
            <li class="list-group-item"><b>Transito Uscita CH blocco 2:</b> {{$ricetta->transitoUscitaChBloccoDue}} s</li>
            <li class="list-group-item"><b>Posizione canale 1:</b> {{$ricetta->posizioneCanaleUno}} mm</li>
            <li class="list-group-item"><b>Posizione canale 2:</b> {{$ricetta->posizioneCanaleDue}} mm</li>
            <li class="list-group-item"><b>Posizione canale 3:</b> {{$ricetta->posizioneCanaleTre}} mm</li>
            <li class="list-group-item"><b>Posizione canale 4:</b> {{$ricetta->posizioneCanaleQuattro}} mm</li>
        </ul>
    </div>
</div>


@endforeach

<script>
    var bool = document.getElementsByClassName("checkbool");
    max = bool.length;
    for (let i = 0; i < max; i++) {
        let sup = bool[i].innerHTML;
        if (sup == "1") {
            document.getElementsByClassName("checkbool").item(i).innerHTML = "ON";
            document.getElementsByClassName("checkbool").item(i).classList.add('bg-success', 'text-white');
        } else if (sup == "0") {
            document.getElementsByClassName("checkbool").item(i).innerHTML = "OFF";
            document.getElementsByClassName("checkbool").item(i).classList.add('bg-danger', 'text-white');

        }
    }
</script>

@endsection