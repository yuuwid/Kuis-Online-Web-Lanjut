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
        Schema::create('images', function (Blueprint $table) {
            $table->id("id_image");

            $table->unsignedBigInteger('id_soal')->unsigned()->nullable();
            $table->unsignedBigInteger('id_option')->unsigned()->nullable();

            $table->string("path", "250");
            $table->string("alt", "250");

            $table->foreign('id_soal')->references('id_soal')->on('soal')->onDelete('set null');
            $table->foreign('id_option')->references('id_option')->on('options')->onDelete('set null');

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
        Schema::dropIfExists('images');
    }
};
