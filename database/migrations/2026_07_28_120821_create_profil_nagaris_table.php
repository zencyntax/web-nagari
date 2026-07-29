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
    Schema::create('profil_nagaris', function (Blueprint $table) {
        $table->id();

        // Informasi Dasar
        $table->string('nama_nagari');
        $table->string('logo')->nullable();
        $table->string('hero_image')->nullable();

        // Profil
        $table->longText('tentang')->nullable();
        $table->longText('visi')->nullable();
        $table->longText('misi')->nullable();
        $table->longText('sejarah')->nullable();
        $table->longText('demografi')->nullable();

        // Kontak
        $table->text('alamat')->nullable();
        $table->string('telepon', 30)->nullable();
        $table->string('email')->nullable();

        // Jam Operasional
        $table->string('jam_operasional')->nullable();

        // Sosial Media
        $table->string('facebook')->nullable();
        $table->string('instagram')->nullable();
        $table->string('youtube')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_nagaris');
    }
};
