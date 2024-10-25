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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('menupesanan');
            $table->date('tgl');
            $table->enum('pembayaran', ['Dana', 'Shopeepay', 'OVO', 'COD']);
            $table->bigInteger('harga');
            $table->bigInteger('jumlahpesanan');
            $table->string('namapelanggan');
            $table->string('notelp');
            $table->text('alamat');
            $table->text('pesan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
