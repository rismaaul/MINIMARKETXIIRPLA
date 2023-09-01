<?php

use App\Models\transaksi;
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
        Schema::create('detil_transaksi', function (Blueprint $table) {
            $table->integer('id_detil_transaksi',true,false)->nullable(false);
            $table->integer('id_transaksi',false)->index('idTransaksi')->nullable(false);
            $table->integer('id_barang',false)->index('idBarangtoStok')->nullable(false);
            $table->integer('jumlah',false)->nullable(false);
            $table->integer('total',false)->nullable(false);
            $table->timestamps();
            //FOREIGN KEY
            $table->foreign('id_transaksi')->references('id_transaksi')->on('transaksi')
                ->onDelete('cascade')->onUpdate('cascade');
            
            $table->foreign('id_barang')->references('id_barang')->on('stok')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detil_transaksi');
    }
};
