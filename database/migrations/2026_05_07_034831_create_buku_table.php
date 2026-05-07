<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id('id_buku');
            $table->string('nama_buku');
            $table->string('pengarang');
            $table->integer('stok')->default(0);
            $table->string('cover')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('kategori')->nullable();
            $table->integer('tahun_terbit')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};