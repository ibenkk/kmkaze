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
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomor_telepon');
            $table->string('alamat');
            $table->string('comment');
            $table->integer('total');
            $table->boolean('sudah_bayar')->default(false);
            $table->unsignedBigInteger('id_product')->nullable(true);
            $table->foreign('id_product')->references('id')->on('products');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};
