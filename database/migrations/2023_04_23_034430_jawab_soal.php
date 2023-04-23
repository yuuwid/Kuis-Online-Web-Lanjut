<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JawabSoal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawab_soal', function (Blueprint $table) {
            $table->unsignedBigInteger('id_jawab')->unsigned();
            $table->unsignedBigInteger('id_soal')->unsigned();

            $table->foreign('id_jawab')->references('id_jawab')->on('jawab')->onDelete('cascade');
            $table->foreign('id_soal')->references('id_soal')->on('soal')->onDelete('cascade');

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
        Schema::dropIfExists('jawab_soal');
    }
}
