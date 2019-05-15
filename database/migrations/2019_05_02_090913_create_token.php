<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToken extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('token', function (Blueprint $table) {
          $table->string('id_token')->primary();
          $table->string('issuer');
          $table->string('name');
          $table->double('decimal')->nullable();
          $table->string('icon')->nullable();
          $table->text('desc')->nullable();
          $table->string('toml')->nullable();
          $table->bigInteger("id_blockchain")->unsigned();
          $table->timestamps();
          $table->foreign('id_blockchain')->references('id_blockchain')->on('blockchain')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('token');
    }
}
