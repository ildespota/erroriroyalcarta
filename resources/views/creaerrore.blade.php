@extends('layouts.app')

@section('content')
<form method="post" action="{{ route('aggiungierrore') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="codiceerrore">Codice errore</label>
        <input type="text" class="form-control" id="codiceerrore" name="codiceerrore" placeholder="codice errore sulla macchina">

    </div>
    <div class="form-group">
        <label for="causaerrore ">Causa Errore</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="causaerrore" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="possibilirisoluzioni">Possibili risoluzioni</label>
        <input type="text" class="form-control" id="possibili risoluzioni" name="possibilirisoluzioni" placeholder="possibili risoluzioni">
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="risolto" id="risolto">
        <label class="form-check-label" for="risolto">
            si
        </label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="risolto" id="risolto" checked>
        <label class="form-check-label" for="risolto">
            no
        </label>
    </div>

    <p>Carica immagine relativa all'errore</p>
    <input type="file" name="immagine" id="immagine" class="upload" multiple="multiple" />
    <label for="immagine">
        <button type="submit" class="btn btn-primary">Invia</button>
</form>

@endsection