<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTokenStatistic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('token_statistic', function (Blueprint $table) {
          $table->bigIncrements('id_statistic');
          $table->string('id_token');
          $table->double('volume');
          $table->double('price');
          $table->double('price_low');
          $table->double('price_high');
          $table->double('spread');
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
        Schema::dropIfExists('token_statistic');
    }
}
