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
            $table->decimal('ritardoPartenza', 2, 1)->nullable();
            $table->decimal('durataCorsaAvanti', 2, 1)->nullable();
            $table->decimal('disimpegnoFotocellula', 2, 1)->nullable();
            $table->smallInteger('tempoSaldatura')->nullable();
            $table->tinyInteger('anticipoSaldatura')->nullable();
            $table->smallInteger('centratura')->nullable();
            $table->smallInteger('anticipoStopNastroUscita')->nullable();
            $table->smallInteger('altezzaBarra')->nullable();
            $table->smallInteger('maxVelocitàRitornoBarra')->nullable();
            $table->decimal('tempoAperturaBarra', 2, 1)->nullable();
            $table->decimal('evacuazioneTappetoUscita', 2, 1)->nullable();
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
            $table->decimal('velocitàIngressoAlto', 3, 1)->nullable();
            $table->decimal('velocitàIngressoBasso', 3, 1)->nullable();
            $table->decimal('velocitàCingholiAlto', 3, 1)->nullable();
            $table->decimal('velocitàCingholiBasso', 3, 1)->nullable();
            $table->decimal('velocitàCentraleAlto', 3, 1)->nullable();
            $table->decimal('velocitàCentraleBasso', 3, 1)->nullable();
            $table->decimal('velocitàUscitaAlto', 3, 1)->nullable();
            $table->decimal('velocitàUscitaBasso', 3, 1)->nullable();
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
            $table->decimal('tempoRitardoUnoColla', 4, 3)->nullable();
            $table->decimal('tempoRitardoDueColla', 4, 3)->nullable();
            $table->decimal('tempoDurataColla', 4, 3)->nullable();
            $table->smallInteger('quotaPosizioneEncoder')->nullable();
            $table->decimal('ritardoPartenzaTampone', 4, 3)->nullable();
            $table->smallInteger('quotaPosizioneTampone')->nullable();
            $table->smallInteger('quotaAnticipoStopVuota')->nullable();
            $table->decimal('tempoAttesaRitorno', 4, 3)->nullable();
            $table->boolean('pareggiatoreHMI')->nullable();
            $table->decimal('ritardoPartenzaHMI', 4, 3)->nullable();
            $table->decimal('durataAllineamento', 4, 3)->nullable();
            $table->decimal('transitoUscitaNastroUsc', 4, 3)->nullable();
            $table->decimal('fotocellulaConteggioHMI', 4, 3)->nullable();
            $table->decimal('presenzaSuBloccoUno', 4, 3)->nullable();
            $table->decimal('ritardoAperturaBlocchi', 4, 3)->nullable();
            $table->decimal('transitoUscitaApBloccoUno', 4, 3)->nullable();
            $table->decimal('transitoUscitaChBloccoDue', 4, 3)->nullable();
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
