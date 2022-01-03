<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
  /**
   * Run the migrations.
   * 
   * @return void
   */
  public function up()
  {
    Schema::create('sellers', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('user_id');
      $table->string('shop_name')->nullable();
      $table->string('shop_logo')->nullable();
      $table->string('primary_phone')->nullable();
      $table->string('secondary_phone')->nullable();
      $table->string('email')->nullable();
      $table->string('shop_location')->nullable();
      $table->string('shop_address')->nullable();
      $table->string('city')->nullable();
      $table->string('country')->nullable();
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
    Schema::dropIfExists('sellers');
  }
}
