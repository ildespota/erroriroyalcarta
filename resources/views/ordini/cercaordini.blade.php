@extends('layouts.app')


@section('content')
<h2> cerca per ordine</h2>
<h3>prodotti con numero ordine/cliente/codice prodotto che contengono "{{$search}}" </h3>
@if($cercaordini->isNotEmpty())
@foreach ($cercaordini as $cercaordine)
<div class="row">
    <div class="col-12">
        <a href="/ordine/{{$cercaordine->id}}"><button class="btn btn-primary btn-lg btn-block my-3" type="button">
                {{$cercaordine->nostroCodiceArticolo}} | {{$cercaordine->materiaPrima}} | {{$cercaordine->data}}
            </button>
    </div>
</div>
@endforeach
@else
<div>
    <h2 style="color:red">Nessun ordine trovato</h2>
</div>
@endif
@endsection