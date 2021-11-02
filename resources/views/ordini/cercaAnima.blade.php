@extends('layouts.app')


@section('content')
<h2>Cerca per Anima</h2>
<h3>prodotti con anima simile a: {{$cercaAnima}}</h3>

@if($indexAnima->isNotEmpty())
@foreach ($indexAnima as $anima)
<div class="row">
    <div class="col-12">
        <a href="/ordine/{{$anima->id}}"><button class="btn btn-primary btn-lg btn-block my-3" type="button">
                {{$anima->nostroCodiceArticolo}}
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