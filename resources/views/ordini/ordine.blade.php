@extends('layouts.app')


@section('content')

<div class="row ">
    <ul class="list-group list-group-flush col-12">
        <li class="list-group-item">
            <h3>{{$ordine->nostroCodiceArticolo}}</h3>
        </li>
        <li class="list-group-item"><b>Data:</b>{{$ordine->data}}</li>
        <li class="list-group-item"><b>Cliente:</b> {{$ordine->cliente}}</li>
        <li class="list-group-item"><b>Articolo:</b> {{$ordine->articolo}}</li>
        <li class="list-group-item"><b>Famiglia:</b> {{$ordine->famiglia}}</li>
        <li class="list-group-item"><b>Materia Prima:</b> {{$ordine->materiaPrima}}</li>
        <li class="list-group-item"><b>Tipo Carta:</b> {{$ordine->tipoCarta}}</li>
        <li class="list-group-item"><b>Qualità carta:</b> {{$ordine->qualitàCarta}}</li>
        <li class="list-group-item"><b>Altezza bobina madre:</b> {{$ordine->altezzaBobinaMadre}}</li>
        <li class="list-group-item"><b>Grammatura:</b> {{$ordine->grammatura}}</li>
        <li class="list-group-item"><b>Numero Veli:</b> {{$ordine->numeroVeli}}</li>
        <li class="list-group-item"><b>Allungamento:</b> {{$ordine->allungamento}}</li>
        <li class="list-group-item"><b>Peso bobina madre :</b> {{$ordine->pesoBobinaMadre}}</li>
        <li class="list-group-item"><b>Articolo :</b> {{$ordine->articolo}}</li>
        <li class="list-group-item"><b>Nr. rotoli per log:</b> {{$ordine->numeroRotoliPerLog}}</li>
        <li class="list-group-item"><b>Altezza rotolo:</b> {{$ordine->altezzaRotolo}}</li>
        <li class="list-group-item"><b>Nr Metri Rotolo:</b> {{$ordine->numeroMetriRotolo}}</li>
        <li class="list-group-item"><b>Lunghezza Strappo:</b> {{$ordine->lunghezzaStrappo}}</li>
        <li class="list-group-item"><b>Numero strappi:</b> {{$ordine->numeroStrappi}}</li>
        <li class="list-group-item"><b>Tipo Anima:</b> {{$ordine->tipoAnima}}</li>
        <li class="list-group-item"><b>Peso Anima KG:</b> {{$ordine->pesoAnimaKg}}</li>
        <li class="list-group-item"><b>Goffrato:</b> {{$ordine->goffrato}}</li>
        <li class="list-group-item"><b>Nostro Codice Articolo:</b> {{$ordine->nostroCodiceArticolo}}</li>
        <li class="list-group-item"><b>Incollato:</b> {{$ordine->incollato}}</li>
        <li class="list-group-item"><b>Godronato:</b> {{$ordine->godronato}}</li>
        <li class="list-group-item"><b>Diametro rotolo cm:</b> {{$ordine->diametroRotolo}}</li>
        <li class="list-group-item"><b>Peso Rotolo Netto:</b> {{$ordine->pesoRotoloNetto}}</li>
        <li class="list-group-item"><b>Peso Rotolo & Anima & Polielif:</b> ?? </li>
        <li class="list-group-item"><b>Numero Rotoli Collo:</b>{{$ordine->numeroRotoliCollo}}</li>
        <li class="list-group-item"><b>Peso film imballo:</b> {{$ordine->pesoFilmImballo}}</li>
        <li class="list-group-item"><b>Totali peso collo kg:</b> {{$ordine->totalePesoColloKg}}</li>
        <li class="list-group-item"><b>Film Confezionatrice:</b> {{$ordine->filmConfezionatrice}}</li>
        <li class="list-group-item"><b>Etichetta Confezionatrice:</b> {{$ordine->etichettaConfezionatrice}}</li>
        <li class="list-group-item"><b>Maniglia:</b> {{$ordine->manigliatrice}}</li>
        <li class="list-group-item"><b>Film fardellatore:</b> {{$ordine->filmFardellatore}}</li>
        <li class="list-group-item"><b>Etichetta fardellatore:</b> {{$ordine->etichettaFardellatore}}</li>
        <li class="list-group-item"><b>Tipo Etichetta:</b> {{$ordine->tipoEtichetta}}</li>
        <li class="list-group-item"><b>Codice Etichetta:</b> {{$ordine->codiceEtichetta}}</li>
        <li class="list-group-item"><b>Codice a barre:</b> {{$ordine->codiceABarre}}</li>
        <li class="list-group-item"><b>Tipo Pancale:</b> {{$ordine-> tipoPancale}}</li>
        <li class="list-group-item"><b>Resa Pancale:</b> {{$ordine->resaPancale}}</li>
        <li class="list-group-item"><b>Numero Colli per strato:</b> {{$ordine->numeroColliPerStrato}}</li>
        <li class="list-group-item"><b>Numero Strati per pancale:</b> {{$ordine->numeroStratiPerPancale}}</li>
        <li class="list-group-item"><b>Totale Colli per pancale:</b> {{$ordine->TotaleColliPancale}}</li>
        <li class="list-group-item"><b>Metti top:</b> {{$ordine->mettiTop}}</li>
        <li class="list-group-item"><b>Note:</b> {{$ordine->note}}</li>
        <li class="list-group-item"><b>Peso Anima intera kg:</b> {{$ordine->pesoAnimaKg}}</li>
        <li class="list-group-item"><b>Goffrato:</b> {{$ordine->goffrato}}</li>
        <li class="list-group-item"><b>Peso Steccata KG:</b> {{$ordine->pesoSteccataKg}}</li>
        <li class="list-group-item"><b>Numero Pancali da Produrre:</b> {{$ordine->numeroPancaliDaProdurre}}</li>

        </li>
    </ul>
</div>

@endsection