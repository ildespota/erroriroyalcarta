@extends('layouts.app')

@section('content')
<style>
    label {
        font-weight: bold;
    }
</style>
<div class="row justify-content-center">
    <div class="col-12 col-md-10">
        <h1>Crea ricetta parametri</h1>
        <h4>Crea la ricetta per i parametri al confezionamento ogni campo è non obbligatorio perchè i campi sono tanti e tanti parametri,
            cambiano poco al cambio di prodotto </h4>

        <form action="{{route('ricette.storericette')}}" method="Post">
            @csrf
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="codiceArticolo"> Codice articolo:</label>
                <input type="text" id="codiceArticolo" name="codiceArticolo" placeholder="Codice Articolo">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="lunghezzaPacco">Lunghezza Pacco: </label>
                <input type="number" id="lunghezzaPacco" name="lunghezzaPacco" placeholder="lunghezza pacco mm">
            </div>

            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="spaziatura">Spaziatura: </label>
                <input type="number" id="spaziatura" name="spaziatura" placeholder="spaziatura">
            </div>

            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="velocitaNastri">Velocità nastri: </label>
                <input type="number" id="velocitaNastri" name="velocitaNastri" placeholder="velocità nastri">
            </div>

            <!-- Default checked -->
            <div class="row col-12 col-md-10 my-2">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="soffietto" value="1">
                    <label class="custom-control-label" for="soffietto">Soffietto: </label>
                </div>
            </div>

            <div class="row col-12 col-md-10 my-2">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="soloNastri">
                    <label class="custom-control-label" for="soloNastri">Solo Nastri: </label>
                </div>
            </div>

            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="evacuazioneTappetoUscita">Evacuazione Tappeto Uscita:</label>
                <input type="number" id="evacuazioneTappetoUscita" name="evacuazioneTappetoUscita" placeholder=" evacuazione tappeto uscita in sec">
            </div>

            <div class="row col-12 col-md-10 my-2">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="disabilitazioneConsensoValle">
                    <label class="custom-control-label" for="disabilitazioneConsensoValle">Disabilitazione consenso a Valle: </label>
                </div>
            </div>

            <div class="row col-12 col-md-10 my-2">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="monopiegatore">
                    <label class="custom-control-label" for="monopiegatore">Monopiegatore: </label>
                </div>
            </div>

            <div class="row col-12 col-md-10 my-2">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="pareggiatore">
                    <label class="custom-control-label" for="pareggiatore">Pareggiatore: </label>
                </div>
            </div>

            <div class=" col-12 col-md-10 my-2">
                <label class="mx-2" for="ritardoPartenza">Ritardo Partenza: </label>
                <input type="number" id="ritardoPartenza" name="ritardoPartenza" placeholder="ritardo partenza">
            </div>

            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="durataCorsaAvanti">Durata corsa avanti: </label>
                <input type="number" id="durataCorsaAvanti" name="durataCorsaAvanti" placeholder="Durata corsa avanti">
            </div>

            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="disimpegnoFotocellula">Disimpegno Fotocellula: </label>
                <input type="number" id="disimpegnoFotocellula" name="disimpegnoFotocellula" placeholder="Disimpegno fotocellula">
            </div>

            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="tempoSaldatura">Tempo Saldatura: </label>
                <input type="number" id="tempoSaldatura" name="tempoSaldatura" placeholder="Tempo Saldatura in l/100s">
            </div>

            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="anticipoSaldatura">Anticipo Saldatura: </label>
                <input type="number" id="anticipoSaldatura" name="anticipoSaldatura" placeholder="Anticipo Saldatura in %">
            </div>

            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="centratura">Centratura: </label>
                <input type="number" id="centratura" name="centratura" placeholder="Centratura in mm">
            </div>

            <div class=" row col-12 col-md-10 my-2">
                <label class="mx-2" for="anticipoStopNastroUscita">Anticipo stop nastro uscita: </label>
                <input type="number" id="anticipoStopNastroUscita" name="anticipoStopNastroUscita" placeholder="Anticipo stop nastro uscita in mm">
            </div>

            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="altezzaBarra">Altezza Barra: </label>
                <input type="number" id="altezzaBarra" name="altezzaBarra" placeholder="Altezza Barra">
            </div>

            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="maxVelocitàRitornoBarra">Massima Velocità Ritorno Barra: </label>
                <input type="number" id="maxVelocitàRitornoBarra" name="maxVelocitàRitornoBarra" placeholder="Massima Velocità ritorno barra">
            </div>

            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="maxVelocitàRitornoBarra">Massima Velocità Ritorno Barra: </label>
                <input type="number" id="maxVelocitàRitornoBarra" name="maxVelocitàRitornoBarra" placeholder="Massima Velocità ritorno barra">
            </div>

            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="tempoAperturaBarra">Tempo Apertura Barra: </label>
                <input type="number" id="tempoAperturaBarra" name="tempoAperturaBatta" placeholder="tempo apertura barra">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="evacuazioneTappetoUscita">Evacuazione tappeto uscita: </label>
                <input type="number" id="evacuazioneTappetoUscita" name="evacuazioneTappetoUscita" placeholder="Evacuazione Tappeto Uscita">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="saldatoreLaterale">Saldatore Laterale: </label>
                <input type="number" id="saldatoreLaterale" name="saldatoreLaterale" placeholder="saldatore Laterale">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="fotocellule">Fotocellule: </label>
                <input type="number" id="fotocellule" name="fotocellule" placeholder="saldatore Laterale">
            </div>

            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="tappetiAvvicinabili">Tappeti Avvicinabili: </label>
                <input type="number" id="tappetiAvvicinabili" name="tappetiAvvicinabili" placeholder="tappeti Avvicinabili">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="fotocellulaCanaleUnoAlto">Fotocellula canale uno alto: </label>
                <input type="number" id="fotocellulaCanaleUnoAlto" name="fotocellulaCanaleUnoAlto" placeholder="fotocellula Canale Uno Alto">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="fotocellulaCanaleUnoBasso">Fotocellula canale uno basso: </label>
                <input type="number" id="fotocellulaCanaleUnoBasso" name="fotocellulaCanaleUnoBasso" placeholder="fotocellula Canale Uno Basso">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="fotocellulCanaleDueAlto">Fotocellula canale uno Alto: </label>
                <input type="number" id="fotocellulaCanaleDueAlto" name="fotocellulaCanaleDueAlto" placeholder="fotocellula Canale Due Alto">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="fotocellulCanaleDueBasso">Fotocellula canale uno Alto: </label>
                <input type="number" id="fotocellulaCanaleDueBasso" name="fotocellulaCanaleDueBasso" placeholder="fotocellula Canale Due Basso">
            </div>

            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="fotocellulCanaleTreAlto">Fotocellula canale tre Alto: </label>
                <input type="number" id="fotocellulaCanaleTreAlto" name="fotocellulaCanaleTreAlto" placeholder="fotocellula Canale Tre Alto">
            </div>

            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="fotocellulCanaleTreBasso">Fotocellula canale tre Basso: </label>
                <input type="number" id="fotocellulaCanaleTreBasso" name="fotocellulaCanaleTreBasso" placeholder="fotocellula Canale Tre Basso">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="fotocellulCanaleTreBasso">Fotocellula canale tre Basso: </label>
                <input type="number" id="fotocellulaCanaleTreBasso" name="fotocellulaCanaleTreBasso" placeholder="fotocellula Canale Tre Basso">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="fotocellulaConteggioAlto">Fotocellula conteggio Alto: </label>
                <input type="number" id="fotocellulaConteggioAlto" name="fotocellulaConteggioAlto" placeholder="fotocellula Conteggio Alto">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="fotocellulaConteggioBasso">Fotocellula Conteggio Basso: </label>
                <input type="number" id="fotocellulaConteggioBasso" name="fotocellulaConteggioBasso" placeholder="fotocellula Conteggio Basso">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="velocitàIngressoAlto">Fotocellula Conteggio Alto: </label>
                <input type="number" id="velocitàIngressoAlto" name="velocitàIngressoAlto" placeholder="Velocità ingresso Alto">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="velocitàIngressoBasso">Velocità ingresso Alto: </label>
                <input type="number" id="velocitàIngressoAlto" name="velocitàIngressoAlto" placeholder="Velocità ingresso Alto">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="velocitàCingholiAlto">Velocità Cingholi Alto: </label>
                <input type="number" id="velocitàCingholiAlto" name="velocitàCingholiAlto" placeholder="Velocità Cingholi Alto">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="velocitàCingholiBasso">Velocità Cingholi Basso: </label>
                <input type="number" id="velocitàCingholiBasso" name="velocitàCingholiBasso" placeholder="Velocità Cingholi Basso">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="velocitàCentraleAlto">Velocità Centrale Alto: </label>
                <input type="number" id="velocitàCentraleAlto" name="velocitàCentraleAlto" placeholder="Velocità Centrale Alto">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="velocitàCentraleBasso">Velocità Centrale Basso: </label>
                <input type="number" id="velocitàCentraleBasso" name="velocitàCentraleBasso" placeholder="velocità Centrale Basso">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="velocitàUscitaAlto">Velocità Uscita Alto: </label>
                <input type="number" id="velocitàUscitaAlto" name="velocitàUscitaAlto" placeholder="velocità Uscita Alto">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="velocitàUscitaBasso">Velocità Uscita Basso: </label>
                <input type="number" id="velocitàUscitaBasso" name="velocitàUscitaBasso" placeholder="velocitàUscitaBasso">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="canaliAttivi">Canali Attivi: </label>
                <input type="number" id="canaliAttivi" name="canaliAttivi" placeholder="canaliAttivi">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="cambioCanale">Canali Attivi: </label>
                <input type="number" id="cambioCanale" name="cambioCanale" placeholder="cambioCanale">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="capienzaCanale">Capienza Canale: </label>
                <input type="number" id="capienzaCanale" name="capienzaCanale" placeholder="capienzaCanale">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="uscitaCanale"> Uscita Canale: </label>
                <input type="number" id="uscitaCanale" name="uscitaCanale" placeholder="capienzaCanale">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="bypassMonte"> By pass Consenso a monte: </label>
                <input type="number" id="bypassMonte" name="bypassMonte" placeholder="capienzaCanale">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="bypassValle"> By pass Consenso a Valle: </label>
                <input type="number" id="bypassValle" name="bypassValle" placeholder="capienzaCanale">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="modalitàSoloNastriDiverter"> Modalità solo nastri diverter: </label>
                <input type="number" id="modalitàSoloNastriDiverter" name="modalitàSoloNastriDiverter" placeholder="modalità Solo Nastri Diverter">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="caricoNastroCentraleAPasso"> Carico Nastro Centrale a Passo: </label>
                <input type="number" id="caricoNastroCentraleAPasso" name="caricoNastroCentraleAPasso" placeholder="carico Solo Nastri Diverter">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="abilitaUscitaDaBlocchi"> Abilita uscita da blocchi: </label>
                <input type="number" id="abilitàUscitaDaBlocchi" name="abilitaUscitaDaBlocchi" placeholder="abilita Uscita Da Blocchi">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="mettietichettaFermaNastro"> Metti Etichetta ferma nastro: </label>
                <input type="number" id="mettiEtichettaFormaNastro" name="mettiEtichettaFermaNastro" placeholder="metti etichetta ferma nastro">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="tempoRitardoCollaUno"> Tempo ritardo 1 colla : </label>
                <input type="number" id="tempoRitardoCollaUno" name="tempoRitardoCollaUno" placeholder="tempo ritardo colla uno">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="tempoRitardoCollaDue"> Tempo ritardo 2 colla: </label>
                <input type="number" id="tempoRitardoCollaDue" name="tempoRitardoCollaDue" placeholder="tempo ritardo colla due">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="tempoDurataColla"> Tempo durata colla: </label>
                <input type="number" id="tempoDurataColla" name="tempoDurataColla" placeholder="tempo durata colla">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="quotaPosizioneEncoder"> Quota posizione encoder: </label>
                <input type="number" id="quotaPosizioneEncoder" name="quotaPosizioneEncoder" placeholder="Quota posizione Encoder">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="ritardoPartenzaTampone"> Ritardo partenza tampone: </label>
                <input type="number" id="ritardoPartenzaTampone" name="ritardoPartenzaTampone" placeholder="Ritardo partenza Tampone">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="quotaPosizioneTampone"> Quota posizione tampone: </label>
                <input type="number" id="quotaPosizioneTampone" name="quotaPosizioneTampone" placeholder="quota posizione Tampone">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="quotaAnticipoStopVuota"> Quota anticipo stop vuota: </label>
                <input type="number" id="quotaAnticipoStopVuota" name="quotaAnticipoStopVuota" placeholder="quota anticipo stop vuota">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="tempoAttesaRitorno"> Tempo Attesa Ritorno: </label>
                <input type="number" id="tempoAttesaRitorno" name="tempoAttesaRitorno" placeholder="tempoAttesaRitorno">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="pareggiatore"> pareggiatore: </label>
                <input type="number" id="pareggiatore" name="pareggiatore" placeholder="pareggiatore">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="ritadoPartenza"> ritardo Partenza: </label>
                <input type="number" id="ritardoPartenza" name="ritardoPartenza" placeholder="ritardo Partenza">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="durataAllineamento"> durata Allineamento: </label>
                <input type="number" id="durataAllineamento" name="durataAllineamento" placeholder="durata allineamento">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="transitoUscitaNastroUsc"> Transito Uscita Nastro Usc: </label>
                <input type="number" id="transitoUscitaNastroUsc" name="transitoUscitaNastroUsc" placeholder="transitoUscitaNastroUsc">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="presenzaSuBloccoUno"> Presenza su blocco 1: </label>
                <input type="number" id="presenzaSuBloccoUno" name="presenzaSuBloccoUno" placeholder="Presenza su blocco 1">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="ritardoAperturaBlocchi"> Ritardo apertura blocchi: </label>
                <input type="number" id="ritardoAperturaBlocchi" name="ritardoAperturaBlocchi" placeholder="ritardo Apertura Blocchi:">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="transitoUscitaApBloccoDue"> Transito uscita ap blocco Due: </label>
                <input type="number" id="transitoUscitaApBloccoDue" name="transitoUscitaApBloccoDue" placeholder="transito Uscita Ap Blocco Uno">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="transitoUscitaApBloccoDue"> Transito uscita ap blocco uno: </label>
                <input type="number" id="transitoUscitaApBloccoDue" name="transitoUscitaApBloccoDue" placeholder="transito Uscita Ap Blocco Due">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="transitoUscitaChBloccoDue"> Transito uscita Ch blocco due: </label>
                <input type="number" id="transitoUscitaChBloccoDue" name="transitoUscitaChBlocco2" placeholder="transito Uscita Ch Blocco Due">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="transitoUscitaChBloccoDue"> Transito CH blocco 2: </label>
                <input type="number" id="transitoUscitaChBloccoDue" name="transitoUscitaChBlocco2" placeholder="transito Uscita Ch Blocco Due">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="posizioneCanaleUno"> Posizione Canale uno: </label>
                <input type="number" id="posizioneCanaleUno" name="posizioneCanaleUno" placeholder="Posizione canale 1">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="posizioneCanaleDue"> Posizione Canale Due: </label>
                <input type="number" id="posizioneCanaleDue" name="posizioneCanaleDue" placeholder="Posizione Canale Due">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="posizioneCanaleTre"> Posizione Canale Tre: </label>
                <input type="number" id="posizioneCanaleTre" name="posizioneCanaleTre" placeholder="Posizione Canale Tre">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="posizioneCanaleQuattro"> Posizione Canale Quattro: </label>
                <input type="number" id="posizioneCanaleQuattro" name="posizioneCanaleQuattro" placeholder="Posizione Canale Quattro">
            </div>
            <div class="row col-12 col-md-10 my-2">
                <label class="mx-2" for="posizioneCanaleQuattro"> Posizione Canale Quattro: </label>
                <input type="number" id="posizioneCanaleQuattro" name="posizioneCanaleQuattro" placeholder="Posizione Canale Quattro">
            </div>

            <button type="submit">crea ricetta</button>




    </div>
    </form>
    <div>
        @endsection