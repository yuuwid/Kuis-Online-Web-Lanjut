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
        Schema::create('kuis', function (Blueprint $table) {
            $table->id("id_kuis");
            $table->string("title", 100)->nullable(false);
            $table->string("slug", 100)->nullable(false)->unique();
            $table->text("description")->nullable(true);
            $table->boolean("status")->default(false);
            $table->string("thumbnail", 100)->default("no-image.jpg");
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
        Schema::dropIfExists('kuis');
    }
};
