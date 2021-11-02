@extends('layouts.app')


@section('content')
<h2>Cerca per Diametro Rotolo</h2>
<h3>prodotti con Diametro maggiore di : {{$cercaDiametro}}</h3>

@if($indexDiametro->isNotEmpty())
@foreach ($indexDiametro as $diametro)
<div class="row">
    <div class="col-12">
        <a href="/ordine/{{$diametro->id}}"><button class="btn btn-primary btn-lg btn-block my-3" type="button">
                {{$diametro->nostroCodiceArticolo}}
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