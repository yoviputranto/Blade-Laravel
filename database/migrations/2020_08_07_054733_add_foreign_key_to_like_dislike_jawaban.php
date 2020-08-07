<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToLikeDislikeJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('like_dislike_jawaban', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('profil_id')->nullable();
            $table->foreign('profil_id')->references('id')->on('profiles');
            $table->unsignedBigInteger('jawaban_id')->nullable();
            $table->foreign('jawaban_id')->references('id')->on('jawaban');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('like_dislike_jawaban', function (Blueprint $table) {
            //
            $table->dropForeign(['profil_id']);
            $table->dropColumn(['profil_id']);
            $table->dropForeign(['jawaban_id']);
            $table->dropColumn(['jawaban_id']);
        });
    }
}
