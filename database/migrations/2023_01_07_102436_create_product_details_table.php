<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id', false, true);
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->string('sku')->unique();
            $table->string('name');
            $table->string('image');
            $table->unsignedInteger('purchase_price');
            $table->unsignedInteger('price');
            $table->unsignedInteger('weight');
            $table->unsignedInteger('width');
            $table->unsignedInteger('length');
            $table->unsignedInteger('height');
            $table->unsignedInteger('status');
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
        Schema::dropIfExists('product_details');
    }
};
