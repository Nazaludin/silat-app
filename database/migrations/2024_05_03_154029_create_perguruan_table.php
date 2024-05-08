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
            $table->string('nama')->nullable();;
            $table->string('arti_nama')->nullable();;
            $table->string('motto')->nullable();;
            $table->string('sejarah')->nullable();;
            $table->string('deskripsi')->nullable();;
            $table->string('nama_file_logo')->nullable();;
            $table->string('makna_logo')->nullable();;
            $table->string('tahun_berdiri')->nullable();;
            $table->string('aliran')->nullable();;
            $table->string('provinsi')->nullable();;
            $table->string('kabupaten')->nullable();;
            $table->string('kecamatan')->nullable();;
            $table->string('desa')->nullable();;
            $table->string('nama_jalan')->nullable();;
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
