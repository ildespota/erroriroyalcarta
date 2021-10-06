<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Manutenzioni extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('registromanutenzioni', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('idManutenzione');
            $table->date('data');
            $table->string('esecutore');
            $table->string('descrizioneManutenzione');
            $table->string('note');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registromanutenzioni');
    }
}
