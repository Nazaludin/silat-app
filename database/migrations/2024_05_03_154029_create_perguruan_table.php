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
        Schema::create('perguruan', function (Blueprint $table) {
            $table->id('id_perguruan');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('nama');
            $table->string('arti_nama');
            $table->string('motto');
            $table->string('sejarah');
            $table->string('deskripsi');
            $table->string('lokasi_logo');
            $table->string('makna_logo');
            $table->string('tahun_berdiri');
            $table->string('aliran');
            $table->string('provinsi');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('nama_jalan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perguruan');
    }
};
