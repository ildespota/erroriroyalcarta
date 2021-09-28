@extends('layouts.app')


@section('content')
<h2>Cerca per altezza</h2>
<h3>prodotti con altezza minima di {{$rangeAltezza}} cm</h3>

@if($cercaAltezza->isNotEmpty())
@foreach ($cercaAltezza as $altezza)
<div class="row">
    <div class="col-12">
        <a href="/ordine/{{$altezza->id}}"><button class="btn btn-primary btn-lg btn-block my-3" type="button">
                {{$altezza->nostroCodiceArticolo}}
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