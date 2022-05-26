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
            $table->string('name')->unique();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('cart_id')->nullable();
            $table->integer('stock');
            $table->double('price');
            $table->text('description');
            $table->string('image_path');
            $table->integer('popular');
            $table->string('state');
            $table->integer('storage');
            $table->string('color');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')->onDelete('cascade');
            $table->foreign('cart_id')
                ->references('id')
                ->on('carts')->onDelete('set null');

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
