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
    Schema::create('agendas', function (Blueprint $table) {
        $table->id();

        $table->string('judul');
        $table->string('slug')->unique();

        $table->string('thumbnail')->nullable();
        $table->longText('deskripsi');

        // Informasi Agenda
        $table->date('tanggal');
        $table->time('waktu')->nullable();
        $table->string('lokasi')->nullable();

        // Status
        $table->boolean('featured')->default(false);
        $table->boolean('status')->default(true);

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
