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

        $table->foreignId('jabatan_id')
            ->constrained('jabatans')
            ->cascadeOnUpdate()
            ->restrictOnDelete();

        $table->string('nama');

        $table->string('foto')->nullable();

        $table->boolean('status')->default(true);

        // Tambahkan di sini
        $table->unsignedInteger('urutan')->default(0);

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
