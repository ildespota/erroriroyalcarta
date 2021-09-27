@extends('layouts.app')


@section('content')
<h2> cerca per ordine</h2>
@if($cercaordini->isNotEmpty())
@foreach ($cercaordini as $cercaordine)
<div class="row">
    <div class="col-12">
        <a href="/ordine/{{$cercaordine->id}}"><button class="btn btn-primary btn-lg btn-block my-3" type="button">
                {{$cercaordine->nostroCodiceArticolo}}
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