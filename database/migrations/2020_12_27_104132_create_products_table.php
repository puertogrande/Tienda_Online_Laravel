<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->bigInteger('category_id');
            $table->bigInteger('chart_id')->nullable();
            $table->string('name');
            $table->float('price');
            $table->timestamps();
            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onCascade('delete');
            $table->foreign('chart_id')
            ->references('id')
            ->on('shoppings_carts')
            ->onCascade('delete');
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
