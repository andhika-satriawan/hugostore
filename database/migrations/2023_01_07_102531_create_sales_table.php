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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id', false, true);
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->string('transaction_code');
            $table->longText('address');
            $table->unsignedInteger('total_price');
            $table->unsignedInteger('shipping_price');
            $table->unsignedInteger('total');
            $table->string('shipping_status');
            $table->string('recipient_name');
            $table->string('recipient_phone', 18);
            $table->string('shipping'); // JNE, J&T
            $table->string('shipping_type'); // Regular, Express
            $table->string('resi')->nullable();
            $table->string('payment_url')->nullable();
            $table->string('payment_token')->nullable();
            $table->string('transaction_status')->default('PENDING'); // PENDING/SUCCESS/CANCELLED
            $table->string('transaction_source')->default('hugostore'); //Hugostore/Tokopedia
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
        Schema::dropIfExists('sales');
    }
};
