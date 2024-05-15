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
        Schema::create('komen_revisi_berita', function (Blueprint $table) {
            $table->id('id_komen_revisi_berita');
            $table->unsignedBigInteger('id_berita');
            $table->foreign('id_berita')->references('id_berita')->on('berita')->onDelete('cascade')->onUpdate('cascade');
            $table->string('komen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komen_revisi_berita');
    }
};
