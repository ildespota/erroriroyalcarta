@extends('layouts.app')

@section('content')
<div class="row"></div>
<div class="col-12 col-md-6">
    <h1>Crea Manutenzione</h1>
    <form action="{{route('storemanutenzioni')}}" method="POST">
        @csrf
        <div>
            <label for="idManutenzione"> Inserisci numero manutenzione</label>
            <input id="idManutenzione" name="idManutenzione" type="number" required>
        </div>
        <div>
            <label for="data">Inserisci data</label>
            <input type="date" name="data" id="data" required>
        </div>
        <div>
            <label for="esecutore">Inserisci esecutore manutenzione</label>
            <input type="text" name="esecutore" id="esecutore" required>
        </div>
        <div>
            <label for="descrizioneManutenzione">Descrizione manutenzione</label>
        </div>
        <div>
            <textarea t name="descrizioneManutenzione" id="descrizioneManutenzione" cols="30" rows="10" required></textarea>
        </div>
        <div>
            <label for="note">Note</label>
            <input type="text" name="note" id="note">
        </div>
        <button type="submit">Salva Manutenzione</button>
    </form>

    @if(session()->has('message'))
    <div class="alert {{session('alert') ?? 'alert-info'}}">
        {{ session('message') }}
    </div>
    @endif

</div>

@endsection