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
        Schema::create('tbl_presensis', function (Blueprint $table) {
            $table->id();
            $table->date('Tanggal')->nullable();
            $table->integer('NIP');
            $table->foreign('NIP')->references('NIP')->on('tbl_pegawais');
            $table->time('Jam_masuk')->nullable();
            $table->time('Jam_pulang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_presensis');
    }
};
