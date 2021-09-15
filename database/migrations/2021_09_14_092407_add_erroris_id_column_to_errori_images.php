<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddErrorisIdColumnToErroriImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('errori_images', function (Blueprint $table) {
            $table->unsignedBigInteger('erroris_id');
            $table->foreign('erroris_id')->references('id')->on('erroris');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('errori_images', function (Blueprint $table) {
            $table->dropForeign(['erroris_id']);
            $table->dropColumn('erroris_id');
        });
    }
}
