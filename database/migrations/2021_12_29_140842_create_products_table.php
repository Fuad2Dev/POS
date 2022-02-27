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
            $table->string('name')->nullable();
            $table->string('category')->nullable();
            $table->string('size_type')->nullable();
            $table->string('color')->nullable();
            $table->decimal('price', 10, 2)->unsigned()->nullable();
            $table->string('code')->nullable();
            $table->string('barcode')->nullable();
            $table->integer('stock')->unsigned()->nullable();
            $table->integer('stock_defective')->unsigned()->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
