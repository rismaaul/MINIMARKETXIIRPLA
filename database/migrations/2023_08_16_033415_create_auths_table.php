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
        Schema::create('tbl_akun', function (Blueprint $t) {
            $t->integer('id_akun')->nullable(false)->autoIncrement();
            $t->string('username',100)->nullable(false);
            $t->text('password');
            $t->enum('role',['admin','kasir']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_akun');
    }
};
