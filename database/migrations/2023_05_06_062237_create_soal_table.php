<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal', function (Blueprint $table) {
            $table->id("id_soal");

            $table->unsignedBigInteger('id_kuis')->unsigned()->nullable(true);

            $table->text('pertanyaan');
            $table->unsignedSmallInteger('poin');

            $table->foreign('id_kuis')->references('id_kuis')->on('kuis')->onDelete('set null');

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
        Schema::dropIfExists('soal');
    }
};
