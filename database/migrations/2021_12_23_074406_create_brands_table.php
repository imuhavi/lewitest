<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateBrandsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('brands', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->text('logo')->nullable();
      $table->text('banner')->nullable();
      $table->enum('status', ['Active', 'Inactive'])->default('Active');
      $table->string('slug')->nullable();
      $table->string('meta_title')->nullable();
      $table->text('meta_description')->nullable();
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
    Schema::dropIfExists('brands');
  }
}
