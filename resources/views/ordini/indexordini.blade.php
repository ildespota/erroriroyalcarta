@extends('layouts.app')


@section('content')
<form action="{{ route('ordini.cercaordini') }}" method="GET">
    <label for="search">Cerca per numero ordine o codice articolo</label>
    <input type="text" name="search" required />

    <button type="submit">Search</button>
</form>
<form action="{{ route('ordini.cercaAltezza') }}" method="GET">
    <label for="rangeAltezza" class="form-label">Altezza minima rotolo: </label>
    <input type="number" name="rangeAltezza" id="rangeAltezza" required>

    <button type="submit">Cerca Altezza</button>
</form>
<form action="{{ route('ordini.cercaDiametro') }}" method="GET">
    <label for="cercaDiametro" class="form-label">Diametro rotolo minimo: </label>
    <input type="number" name="cercaDiametro" id="cercaDiametro" required>

    <button type="submit">Cerca Diametro</button>
</form>
<form action="{{ route('ordini.cercaAnima') }}" method="GET">
    <label for="cercaAnima" class="form-label">Anima rotolo: </label>
    <input type="text" name="cercaAnima" id="cercaAnima" required>

    <button type="submit">Cerca Anima</button>
</form>

<form action="{{ route('ordini.cercaCodici') }}" method="GET">
    <label for="cercaCodice" class="form-label">Cerca per Codice a barre: </label>
    <input type="text" name="cercaCodice" id="cercaCodice" required>

    <button type="submit">Cerca Codice</button>
</form>


@foreach ($ordini as $ordine)
<a href="/ordine/{{$ordine->id}}"><button class="btn btn-primary btn-lg btn-block my-3" type="button" data-toggle="collapse" data-target="#{{$ordine->nostroCodiceArticolo}}">
        {{$ordine->nostroCodiceArticolo}} | {{$ordine->materiaPrima}} | {{$ordine->data}}
    </button>

    @endforeach
    @endsection