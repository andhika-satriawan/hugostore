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
        Schema::create('wishlists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id', false, true);
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->unsignedBigInteger('product_id', false, true);
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->unsignedBigInteger('product_detail_id', false, true);
            $table->foreign('product_detail_id')->references('id')->on('product_details')->onDelete('cascade');
            $table->unique(["customer_id", "product_id", "product_detail_id"], 'customer_product_product_detail_unique');
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
        Schema::dropIfExists('wishlists');
    }
};
