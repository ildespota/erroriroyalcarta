<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Translation\Provider\Dsn;

class CreateRicettesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ricettes', function (Blueprint $table) {

            //Simatec Panel Touch

            $table->id();
            $table->string('codiceArticolo');
            $table->smallInteger('lunghezzaPacco')->nullable();
            $table->smallInteger('spaziatura')->nullable();
            $table->smallInteger('velocitàNastri')->nullable();
            $table->boolean('soffiettoOn')->nullable();
            $table->boolean('disabilitazioneConsensoValle')->nullable();
            $table->boolean('monopiegatore')->nullable();
            $table->boolean('pareggiatore')->nullable();
            $table->tinyInteger('disabilitazioneConsensoUscita')->nullable();
            $table->decimal('ritardoPartenza', $precision = 2, $scale = 1)->nullable();
            $table->decimal('durataCorsaAvanti', $precision = 2, $scale = 1)->nullable();
            $table->decimal('disimpegnoFotocellula', $precision = 2, $scale = 1)->nullable();
            $table->smallInteger('tempoSaldatura')->nullable();
            $table->tinyInteger('anticipoSaldatura')->nullable();
            $table->smallInteger('centratura')->nullable();
            $table->smallInteger('anticipoStopNastroUscita')->nullable();
            $table->smallInteger('altezzaBarra')->nullable();
            $table->tinyInteger('maxVelocitàRitornoBarra')->nullable();
            $table->decimal('tempoAperturaBarra', $precision = 2, $scale = 1)->nullable();
            $table->decimal('evacuazioneTappetoUscita', $precision = 3, $scale = 1)->nullable();
            $table->string('saldatoreLaterale')->nullable();
            $table->string('fotocellule')->nullable();
            $table->boolean('tappetiAvvicinabili')->nullable();

            // Simatec HMI
            $table->smallInteger('fotocellulaCanaleUnoAlto')->nullable();
            $table->smallInteger('fotocellulaCanaleUnoBasso')->nullable();
            $table->smallInteger('fotocellulaCanaleDueAlto')->nullable();
            $table->smallInteger('fotocellulaCanaleDueBasso')->nullable();
            $table->smallInteger('fotocellulaCanaleTreAlto')->nullable();
            $table->smallInteger('fotocellulaCanaleTreBasso')->nullable();
            $table->smallInteger('fotocellulaConteggioAlto')->nullable();
            $table->smallInteger('fotocellulaConteggioBasso')->nullable();
            $table->decimal('velocitàIngressoAlto', $precision = 3, $scale = 1)->nullable();
            $table->decimal('velocitàIngressoBasso',  $precision = 3, $scale = 1)->nullable();
            $table->decimal('velocitàCingholiAlto', $precision = 3, $scale = 1)->nullable();
            $table->decimal('velocitàCingholiBasso', $precision = 3, $scale = 1)->nullable();
            $table->decimal('velocitàCentraleAlto', $precision = 3, $scale = 1)->nullable();
            $table->decimal('velocitàCentraleBasso', $precision = 3, $scale = 1)->nullable();
            $table->decimal('velocitàUscitaAlto', $precision = 3, $scale = 1)->nullable();
            $table->decimal('velocitàUscitaBasso', $precision = 3, $scale = 1)->nullable();
            $table->smallInteger('canaliAttivi')->nullable();
            $table->smallInteger('cambioCanale')->nullable();
            $table->smallInteger('capienzaCanale')->nullable();
            $table->smallInteger('uscitaCanale')->nullable();
            $table->boolean('bypassMonte')->nullable();
            $table->boolean('bypassValle')->nullable();
            $table->boolean('modalitàSoloNastriDiverter')->nullable();
            $table->boolean('controlloRibaltamentoRotoli')->nullable();
            $table->boolean('caricoNastroCentralePasso')->nullable();
            $table->boolean('abilitàUscitaBlocchi')->nullable();
            $table->boolean('mettietichettaFermaNastro')->nullable();
            $table->decimal('tempoRitardoUnoColla', $precision = 4, $scale = 3)->nullable();
            $table->decimal('tempoRitardoDueColla', $precision = 4, $scale = 3)->nullable();
            $table->decimal('tempoDurataColla', $precision = 4, $scale = 3)->nullable();
            $table->smallInteger('quotaPosizioneEncoder')->nullable();
            $table->decimal('ritardoPartenzaTampone', $precision = 4, $scale = 3)->nullable();
            $table->smallInteger('quotaPosizioneTampone')->nullable();
            $table->smallInteger('quotaAnticipoStopVuota')->nullable();
            $table->decimal('tempoAttesaRitorno', $precision = 4, $scale = 3)->nullable();
            $table->boolean('pareggiatoreHMI')->nullable();
            $table->decimal('ritardoPartenzaHMI', $precision = 4, $scale = 3)->nullable();
            $table->decimal('durataAllineamento', $precision = 4, $scale = 3)->nullable();
            $table->decimal('transitoUscitaNastroUsc', $precision = 4, $scale = 3)->nullable();
            $table->decimal('fotocellulaConteggioHMI', $precision = 4, $scale = 3)->nullable();
            $table->decimal('presenzaSuBloccoUno', $precision = 4, $scale = 3)->nullable();
            $table->decimal('ritardoAperturaBlocchi', $precision = 4, $scale = 3)->nullable();
            $table->decimal('transitoUscitaApBloccoUno', $precision = 4, $scale = 3)->nullable();
            $table->decimal('transitoUscitaChBloccoDue', $precision = 4, $scale = 3)->nullable();
            $table->smallInteger('posizioneCanaleUno')->nullable();
            $table->smallInteger('posizioneCanaleDue')->nullable();
            $table->smallInteger('posizioneCanaleTre')->nullable();
            $table->smallInteger('posizioneCanaleQuattro')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ricettes');
    }
}
