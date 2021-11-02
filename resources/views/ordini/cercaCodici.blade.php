@extends('layouts.app')


@section('content')
<h2>Cerca per codice a barre</h2>
<h3>prodotti con codice a barre: {{$cercaCodice}}</h3>

@if($indexCodice->isNotEmpty())
@foreach ($indexCodice as $codice)
<div class="row">
    <div class="col-12">
        <a href="/ordine/{{$codice->id}}"><button class="btn btn-primary btn-lg btn-block my-3" type="button">
                {{$codice->nostroCodiceArticolo}}
            </button>
    </div>
</div>
@endforeach
@else
<div>
    <h2>Nessun ordine trovato</h2>
</div>
@endif

@endsection