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
        Schema::create('umkm_galleries', function (Blueprint $table) {

            $table->id();

            $table->foreignId('umkm_id')
                ->constrained('umkms')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->string('judul')->nullable();

            $table->string('foto');

            $table->unsignedInteger('urutan')->default(1);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkm_galleries');
    }
};
