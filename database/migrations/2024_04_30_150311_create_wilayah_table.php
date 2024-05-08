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
        Schema::create('provinsi', function (Blueprint $table) {
            $table->id('id_provinsi');
            $table->string('kode_provinsi');
            $table->string('provinsi');
            $table->timestamps();
        });
        Schema::create('kabupaten', function (Blueprint $table) {
            $table->id('id_kabupaten');
            $table->string('kode_provinsi');
            $table->string('kode_kabupaten');
            $table->string('kabupaten');
            $table->timestamps();
        });
        Schema::create('kecamatan', function (Blueprint $table) {
            $table->id('id_kecamatan');
            $table->string('kode_provinsi');
            $table->string('kode_kabupaten');
            $table->string('kode_kecamatan');
            $table->string('kecamatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provinsi');
        Schema::dropIfExists('kabupaten');
        Schema::dropIfExists('kecamatan');
    }
};
