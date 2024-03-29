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

            $table->string('title_ge');
            $table->string('title_en');
            $table->string('title_ru');
            $table->text('description_ge')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();
            $table->float('price');
            $table->boolean('is_sale');
            $table->float('sale')->nullable();
            $table->boolean('vip')->default(false);
            $table->boolean('status')->default(false);
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
