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
        Schema::create('tbl_pegawais', function (Blueprint $table) {
            $table->integer('NIP')->length(8)->unique();
            $table->string('Nama');
            $table->string('Alamat')->nullable();
            $table->date('Tanggal_lahir')->nullable();
            $table->string('Kode_divisi');
            $table->foreign('Kode_divisi')->references('Kode_divisi')->on('tbl_divisis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_pegawais');
    }
};
