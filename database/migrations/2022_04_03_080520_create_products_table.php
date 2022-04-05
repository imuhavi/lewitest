<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('sub_category_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->text('description'); // ckeditor
            $table->text('thumbnail')->nullable(); // 300 X 300
            $table->text('pdf')->nullable();
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->decimal('purchase_price')->default(0);
            $table->decimal('price')->default(0);
            $table->enum('discount_type', ['Percent', 'Flat'])->default('Flat');
            $table->decimal('discount')->default(0);
            $table->decimal('shipping_cost')->default(0);
            $table->string('shipping_days')->nullable();
            $table->string('unit')->nullable(); // PC, KG, L
            $table->integer('min')->nullable();
            $table->integer('max')->nullable();
            $table->integer('quantity')->nullable();
            $table->text('tags')->nullable(); // This is used for search. Input those words by which cutomer can find this product.
            $table->boolean('isCashAvailable')->default(true);
            $table->decimal('tax')->default(0);
            $table->text('attributes')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_image')->nullable();
            $table->boolean('is_draft')->default(0);
            $table->foreign('seller_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('sub_category_id')->references('id')->on('subcategories')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
