<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikedislikeQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likedislikequestion', function (Blueprint $table) {
            $table->unsignedBigInteger('pertanyaan_id');
            $table->unsignedBigInteger('profil_id');
            $table->unsignedBigInteger('poin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likedislikequestion');
    }
}
