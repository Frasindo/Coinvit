<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTokenFavorite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('token_favorite', function (Blueprint $table) {
          $table->bigIncrements('id_tf');
          $table->string('id_token');
          $table->timestamps();
          $table->foreign('id_token')->references('id_token')->on('token')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('token_favorite');
    }
}
