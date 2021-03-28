<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer', function (Blueprint $table) {
            $table->id();
            $table->string('isi');
            $table->timestamps();
            $table->unsignedBigInteger('pertanyaan');
            $table->unsignedBigInteger("profil_id");
        });

        Schema::create('answer', function (Blueprint $table) {
            $table->foreign("profil_id")->references('profil_id')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer');
    }
}
