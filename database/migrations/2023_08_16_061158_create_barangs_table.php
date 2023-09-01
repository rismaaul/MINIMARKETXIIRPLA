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
        Schema::create('barang', function (Blueprint $table) {
            $table->integer('id_barang',true)->nullable(false);
            $table->string('nama_barang',100)->nullable(false);
            $table->string('barcode',100)->nullable(false);
            //Dipindah ke tabel stok-----
            //$table->integer('harga',false)->nullable(false);
            //$table->integer('stok',false,false);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
