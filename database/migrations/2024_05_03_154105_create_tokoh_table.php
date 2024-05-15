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
        Schema::create('tokoh', function (Blueprint $table) {
            $table->id('id_tokoh');
            $table->unsignedBigInteger('id_perguruan');
            $table->foreign('id_perguruan')->references('id_perguruan')->on('perguruan')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama');
            $table->string('tipe');
            $table->string('nama_file');
            $table->longText('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tokoh');
    }
};
