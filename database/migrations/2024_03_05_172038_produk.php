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
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk')->unique();
            $table->string('keterangan');
            $table->integer('harga');
            $table->integer('jumlah');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
