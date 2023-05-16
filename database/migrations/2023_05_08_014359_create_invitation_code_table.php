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
        Schema::create('invitation_codes', function (Blueprint $table) {
            $table->id("id_invite_code");
            $table->char("code", 8);
            $table->boolean("status")->default(1);
            $table->unsignedBigInteger('id_kuis')->unsigned()->nullable();

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
        Schema::dropIfExists('invitation_code');
    }
};
