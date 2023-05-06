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
        Schema::create('results_details', function (Blueprint $table) {
            $table->id("id_results_details");

            $table->unsignedBigInteger('id_result')->unsigned();
            $table->unsignedBigInteger('id_soal')->unsigned()->nullable(true);
            $table->unsignedBigInteger('id_option')->unsigned()->nullable(true);


            $table->foreign('id_result')->references('id_result')->on('results')->onDelete('cascade');
            $table->foreign('id_soal')->references('id_soal')->on('soal')->onDelete('cascade');
            $table->foreign('id_option')->references('id_option')->on('options')->onDelete('cascade');

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
        Schema::dropIfExists('results_details');
    }
};
