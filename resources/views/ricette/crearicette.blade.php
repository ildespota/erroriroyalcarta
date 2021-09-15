@extends('layouts.app')

@section('content')
<style>
    label {
        font-weight: bold;
    }
</style>
<div class="row">

    <form action="{{route('ricette.storericette')}}" method="Post">
        @csrf
        <div class="col-12 col-md-6 ">
            <div class="row">
                <label for="lunghezzaPacco">Lunghezza Pacco</label>
                <input type="number" id="lunghezzaPacco" name="lunghezzaPacco" placeholder="lunghezza pacco mm" required>
            </div>
            <div class="row">
                <label for="spaziatura">Spaziatura</label>
                <input type="number" id="spaziatura" name="spaziatura" placeholder="spaziatura" required>
            </div>
            <div class="row">
                <label for="velocitaNastri">Velocità nastri</label>
                <input type="number" id="velocitaNastri" name="velocitaNastri" placeholder="velocità nastri" required>
            </div>
            <!-- Default checked -->
            <div class="row">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="soffietto" required>
                    <label class="custom-control-label" for="soffietto">Soffietto:</label>
                </div>
            </div>
            <div class="row">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="soloNastri" required>
                    <label class="custom-control-label" for="soloNastri">Solo Nastri:</label>
                </div>
            </div>
            <div class="row">
                <label for="evacuazioneTappetoUscita">Evacuazione Tappeto Uscita:</label>
                <input type="number" id="evacuazioneTappetoUscita" name="evacuazioneTappetoUscita" placeholder=" evacuazione tappeto uscita in sec" required>
            </div>
            <div class="row">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="disabilitazioneConsensoValle" required>
                    <label class="custom-control-label" for="disabilitazioneConsensoValle">Disabilitazione consenso a Valle</label>
                </div>
            </div>
            <div class="row">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="monopiegatore" required>
                    <label class="custom-control-label" for="monopiegatore">Monopiegatore</label>
                </div>
            </div>
            <div class="row">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="pareggiatore" required>
                    <label class="custom-control-label" for="pareggiatore">Pareggiatore</label>
                </div>
            </div>
            <div class="row">
                <label for="ritardoPartenza">Ritardo Partenza</label>
                <input type="number" id="ritardoPartenza" name="ritardoPartenza" placeholder="ritardo partenza" required>
            </div>
            <div class="row">
                <label for="durataCorsaAvanti">Durata corsa avanti</label>
                <input type="number" id="durataCorsaAvanti" name="durataCorsaAvanti" placeholder="Durata corsa avanti" required>
            </div>
            <div class="row">
                <label for="disimpegnoFotocellula">Disimpegno Fotocellula</label>
                <input type="number" id="disimpegnoFotocellula" name="disimpegnoFotocellula" placeholder="Disimpegno fotocellula" required>
            </div>
            <div class="row">
                <label for="tempoSaldatura">Tempo Saldatura</label>
                <input type="number" id="tempoSaldatura" name="tempoSaldatura" placeholder="Tempo Saldatura in l/100s" required>
            </div>
            <div class="row">
                <label for="anticipoSaldatura">Anticipo Saldatura</label>
                <input type="number" id="anticipoSaldatura" name="anticipoSaldatura" placeholder="Anticipo Saldatura in %" required>
            </div>
            <div class="row">
                <label for="centratura">Centratura</label>
                <input type="number" id="centratura" name="centratura" placeholder="Centratura in mm" required>
            </div>
            <div class="row">
                <label for="anticipoStopNastroUscita">Anticipo stop nastro uscita:</label>
                <input type="number" id="anticipoStopNastroUscita" name="anticipoStopNastroUscita" placeholder="Anticipo stop nastro uscita in mm" required>
            </div>
            <div class="row">
                <label for="altezzaBarra">Altezza Barra:</label>
                <input type="number" id="altezzaBarra" name="altezzaBarra" placeholder="Altezza Barra" required>
            </div>
            <div class="row">
                <label for="maxVelocitàRitornoBarra">Massima Velocità Ritorno Barra:</label>
                <input type="number" id="maxVelocitàRitornoBarra" name="maxVelocitàRitornoBarra" placeholder="Massima Velocità ritorno barra" required>
            </div>
            <div class="row">
                <label for="maxVelocitàRitornoBarra">Massima Velocità Ritorno Barra:</label>
                <input type="number" id="maxVelocitàRitornoBarra" name="maxVelocitàRitornoBarra" placeholder="Massima Velocità ritorno barra" required>
            </div>








        </div>
    </form>
    <div>
        @endsection