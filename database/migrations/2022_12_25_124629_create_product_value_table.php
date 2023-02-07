<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_value', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('name_value');
            $table->integer('quantity');
            $table->string('image')->nullable();
            $table->integer('price')->default(0);
            $table->integer('promotional_price');
            $table->integer('sold')->default(0);
            $table->string('sku')->nullable();
            $table->string('barcode')->nullable();
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
        Schema::dropIfExists('product_value');
    }
}
