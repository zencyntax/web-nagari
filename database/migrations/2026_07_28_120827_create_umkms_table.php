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
    Schema::create('umkms', function (Blueprint $table) {
        $table->id();

        // Relasi kategori
        $table->foreignId('umkm_category_id')
            ->constrained('umkm_categories')
            ->cascadeOnUpdate()
            ->restrictOnDelete();

        // Informasi UMKM
        $table->string('nama');
        $table->string('pemilik');
        $table->string('logo')->nullable();
        $table->string('foto')->nullable();

        // Deskripsi
        $table->longText('deskripsi')->nullable();

        // Kontak
        $table->string('alamat')->nullable();
        $table->string('telepon', 30)->nullable();
        $table->string('email')->nullable();
        $table->string('website')->nullable();

        // Media Sosial
        $table->string('facebook')->nullable();
        $table->string('instagram')->nullable();
        $table->string('tiktok')->nullable();

        // Status tampil di website
        $table->boolean('status')->default(true);

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkms');
    }
};
