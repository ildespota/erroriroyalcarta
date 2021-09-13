@extends('layouts.app')

@section('content')
<h1>dashboard controllo errori</h1>

@foreach ($errori as $errore)
<div class="row border border-dark">
    <div class="col-12">
        <div class="col-12 col-md-4 border border-dark">
            <img src="{{$errore->immagine}}" alt="possibili risoluzioni">
        </div>
        <div class="col-12 col-md-8">
            <h5 class="border border-dark">
                <b>Codice Macchina:</b>{{$errore->codicemacchina}}
            </h5>
            <p class="border border-dark">{{$errore->causaerrore}}</p>
            <p class="border border-dark"><b>Descrizione: </b>{{$errore->possibilirisoluzioni}}</p>
            <p> <b>Risolto:</b> {{$errore->risolto}}</p>
        </div>
    </div>
</div>

@endforeach

@endsection