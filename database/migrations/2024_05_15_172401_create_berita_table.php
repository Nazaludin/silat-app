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
        Schema::create('berita', function (Blueprint $table) {
            $table->id('id_berita');
            $table->unsignedBigInteger('id_perguruan');
            $table->foreign('id_perguruan')->references('id_perguruan')->on('perguruan');
            $table->string('judul');
            $table->string('nama_file');
            $table->longText('berita');
            $table->string('hari');
            $table->unsignedBigInteger('id_status_berita')->default(1);
            $table->foreign('id_status_berita')->references('id_status_berita')->on('status_berita');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};