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
            $table->text('causeerrore');
            $table->text('possibilirisoluzioni');
            $table->string('risolto');
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
