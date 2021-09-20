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
            $table->smallInteger('grammatura')->nullable();
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
            $table->boolean('Goffrato')->nullable();
            $table->string('nostroCodiceArticolo')->nullable();
            $table->boolean('incollato')->nullable();
            $table->boolean('godronato')->nullable();
            $table->decimal('diametroRotolo', 3, 1)->nullable();
            $table->float('pesoRotoloNetto')->nullable();
            $table->decimal('pesoRotoloAnima', 4, 3)->nullable();
            $table->smallInteger('numeroRotoliCollo')->nullable();
            $table->decimal('pesoFilmImballo', 3, 2)->nullable();
            $table->float('totalePesoColloKg')->nullable();
            //imballo
            $table->boolean('filmConfezionatrice')->nullable();
            $table->boolean('etichettaConfezionatrice')->nullable();
            $table->boolean('maniglia')->nullable();
            $table->string('filmFardellatore')->nullable();
            $table->boolean('etichettaFardellatore')->nullable();
            $table->string('tipoEtichetta')->nullable();
            $table->string('codiceEtichetta')->nullable();
            $table->char('codiceABarre',13)->nullable();
            //pancale
            $table->string('tipoPancale')->nullable();
            $table->string('resaPancale')->nullable();
            $table->smallInteger('numeroColliPerStrato')->nullable();
            $table->smallInteger('numeroStratiPerPancale')->nullable();
            $table->smallInteger('TotaleColliPancale')->nullable();
            $table->boolean('mettiTop')->nullable();
            //produzioni e varie
            $table->decimal('pesoAnima', 4, 3)->nullable();
            $table->float('pesoSteccataKg')->nullable();
            $table->string('note')->nullable();
            $table->string('numeroPancaliDaProdurre')->nullable();


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
