@extends('layouts.app')


@section('content')
@if($cercaordini->isNotEmpty())
    @foreach ($cercaordini as $cercaordine)
        <div class="post-list">
            <p>{{ $cercaordine->nostroCodiceArticolo }}</p>
        </div>
    @endforeach
@else 
    <div>
        <h2>Nessun ordine trovato</h2>
    </div>
@endif
@endsection