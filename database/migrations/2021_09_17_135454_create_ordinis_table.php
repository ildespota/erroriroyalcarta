<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdinisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordinis', function (Blueprint $table) {
            $table->id();
            $table->date('data')->nullable();
            $table->string('cliente')->nullable();
            $table->string('articolo')->nullable()->nullable();
            $table->string('famiglia')->nullable();
            $table->string('materiaPrima')->nullable();
            $table->string('tipoCarta')->nullable();
            $table->string('qualitàCarta')->nullable();
            $table->decimal('altezzaBobinaMadre', 4, 3)->nullable();
            $table->decimal('grammatura', 2, 1)->nullable();
            $table->tinyInteger('numeroVeli')->nullable();
            $table->string('allungamento')->nullable();
            $table->string('pesoBobinaMadre')->nullable();
            $table->string('articoloProdotto')->nullable();
            $table->smallInteger('numeroRotoliPerLog')->nullable();
            $table->decimal('altezzaRotolo', 3, 1)->nullable();
            $table->float('numeroMetriRotolo')->nullable();
            $table->decimal('lunghezzaStrappo', 3, 2)->nullable();
            $table->smallInteger('numeroStrappi')->nullable();
            $table->string('tipoAnima')->nullable();
            $table->decimal('pesoAnimaKg', 4, 3)->nullable();
            $table->varchar('Goffrato', 40)->nullable();
            $table->string('nostroCodiceArticolo')->nullable();
            $table->varchar('incollato', 40)->nullable();
            $table->varchar('godronato', 40)->nullable();
            $table->decimal('diametroRotolo', 3, 1)->nullable();
            $table->float('pesoRotoloNetto')->nullable();
            $table->decimal('pesoRotoloAnima', 4, 3)->nullable();
            $table->smallInteger('numeroRotoliCollo')->nullable();
            $table->decimal('pesoFilmImballo', 3, 2)->nullable();
            $table->float('totalePesoColloKg')->nullable();
            //imballo
            $table->string('filmConfezionatrice', 40)->nullable();
            $table->string('etichettaConfezionatrice', 40)->nullable();
            $table->string('maniglia', 40)->nullable();
            $table->string('filmFardellatore', 40)->nullable();
            $table->string('etichettaFardellatore', 40)->nullable();
            $table->string('tipoEtichetta')->nullable();
            $table->string('codiceEtichetta')->nullable();
            $table->char('codiceABarre', 13)->nullable();
            //pancale
            $table->string('tipoPancale')->nullable();
            $table->string('resaPancale')->nullable();
            $table->smallInteger('numeroColliPerStrato')->nullable();
            $table->smallInteger('numeroStratiPerPancale')->nullable();
            $table->smallInteger('TotaleColliPancale')->nullable();
            $table->varchar('mettiTop', 40)->nullable();
            //produzioni e varie
            $table->decimal('pesoAnima', 4, 3)->nullable();
            $table->float('pesoSteccataKg')->nullable();
            $table->string('note')->nullable();
            $table->string('numeroPancaliDaProdurre')->nullable();
            //PER DECORO da inserire nel model e nella view 
            $table->decimal('pesoPoliefinaPiùManiglia', 4, 3)->nullable();
            $table->string('tipoDiDecoro', 40)->nullable();



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
        Schema::dropIfExists('ordinis');
    }
}
