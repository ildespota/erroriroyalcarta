<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateErrorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('erroris', function (Blueprint $table) {
            $table->id();
            $table->string('codicemacchina');
            $table->string('causeerrore');
            $table->string('possibilirisoluzioni');
            $table->string('risolto');
            $table->string('immagine')->nullable();
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
        Schema::dropIfExists('erroris');
    }
}
