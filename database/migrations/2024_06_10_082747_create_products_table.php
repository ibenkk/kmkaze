<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name_product');
            $table->text('product_description');
            $table->string('product_category');
            $table->string('best_product');
            $table->integer('total_penjualan')->default(0);
            $table->integer('product_price');
            $table->integer('product_stock');
            $table->string('product_picture')->nullable(true);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
