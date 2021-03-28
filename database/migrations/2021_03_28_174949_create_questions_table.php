<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();            
            $table->string('judul');
            $table->string('isi');
            $table->unsignedBigInteger('jawabantepat');
            $table->unsignedBigInteger("profil_id");
            $table->timestamps();
        });
        Schema::table('questions', function (Blueprint $table) {
            $table->foreign('profil_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
