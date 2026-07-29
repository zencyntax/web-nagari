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
    Schema::create('perangkats', function (Blueprint $table) {
        $table->id();

        // Relasi ke tabel jabatan
        $table->foreignId('jabatan_id')
            ->constrained('jabatans')
            ->cascadeOnUpdate()
            ->restrictOnDelete();

        // Data Perangkat
        $table->string('nama');
        $table->string('foto')->nullable();

        // Status
        $table->boolean('status')->default(true);

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perangkats');
    }
};
