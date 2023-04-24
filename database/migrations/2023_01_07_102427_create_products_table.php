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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_subcategory_id', false, true);
            $table->foreign('product_subcategory_id')->references('id')->on('product_subcategories')->onDelete('cascade');
            $table->unsignedBigInteger('brand_type', false, true);
            $table->foreign('brand_type')->references('id')->on('brand_types')->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->longText('description');
            $table->string('photo');
            $table->unsignedInteger('status'); // 0 = tidak aktif || 1 = aktif || 2 = draft
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
};
