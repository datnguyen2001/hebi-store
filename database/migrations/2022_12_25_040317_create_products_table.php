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
            $table->string('name');
            $table->string('slug');
            $table->string('sku')->nullable();
            $table->string('barcode')->nullable();
            $table->string('banner');
            $table->integer('type_banner')->default(1)->comment('1:img; 2:video');
            $table->string('name_trademark')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('name_category')->nullable();
            $table->integer('price')->default(0);
            $table->integer('promotional_price');
            $table->integer('quantity')->default(0);
            $table->string('name_unit')->nullable();
            $table->string('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->integer('is_active')->default(1);
            $table->integer('is_product_featured')->default(0);
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
