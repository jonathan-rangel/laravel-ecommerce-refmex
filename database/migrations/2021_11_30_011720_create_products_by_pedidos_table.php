<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsByPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_by_pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedBigInteger('pedido_id')->nullable();
            $table->integer('quantity');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')->onDelete('set null');
            $table->foreign('product_id')
                ->references('id')
                ->on('products')->onDelete('set null');
            $table->foreign('pedido_id')
                ->references('id')
                ->on('pedidos')->onDelete('set null');

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
        Schema::dropIfExists('products_by_pedidos');
    }
}
