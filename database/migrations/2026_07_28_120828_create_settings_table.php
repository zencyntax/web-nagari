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
    Schema::create('settings', function (Blueprint $table) {
        $table->id();

        // Informasi Website
        $table->string('nama_website');
        $table->string('logo')->nullable();
        $table->string('favicon')->nullable();

        // Kontak
        $table->text('alamat')->nullable();
        $table->string('telepon', 30)->nullable();
        $table->string('email')->nullable();

        // Media Sosial
        $table->string('facebook')->nullable();
        $table->string('instagram')->nullable();
        $table->string('youtube')->nullable();

        // SEO
        $table->string('meta_title')->nullable();
        $table->text('meta_description')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
