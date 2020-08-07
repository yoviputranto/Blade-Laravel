<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jawaban', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('profil_id');
            $table->foreign('profil_id')->references('id')->on('profiles');
            $table->unsignedBigInteger('pertanyaan_id');
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jawaban', function (Blueprint $table) {
            //
            $table->dropForeign(['profil_id']);
            $table->dropColumn(['profil_id']);
            $table->dropForeign(['pertanyaan_id']);
            $table->dropColumn(['pertanyaan_id']);
        });
    }
}
