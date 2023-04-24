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
        Schema::create('gifts', function (Blueprint $table) {
            $table->id();
            $table->string('recipient_name');
            $table->string('recipient_phone', 18);
            $table->string('product_name');
            $table->unsignedBigInteger('product_id', false, true);
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedBigInteger('product_detail_id', false, true);
            $table->foreign('product_detail_id')->references('id')->on('product_details');
            $table->unsignedInteger('purchase_price');
            $table->unsignedInteger('price');
            $table->longText('address')->nullable();
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
        Schema::dropIfExists('gifts');
    }
};
