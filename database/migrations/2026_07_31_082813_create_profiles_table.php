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
    Schema::create('profiles', function (Blueprint $table) {

        $table->id();

        /*
        |--------------------------------------------------------------------------
        | Sambutan Wali Nagari
        |--------------------------------------------------------------------------
        */

        $table->string('foto_wali')->nullable();
        $table->string('nama_wali')->nullable();
        $table->string('jabatan_wali')->nullable();
        $table->longText('sambutan')->nullable();

        /*
        |--------------------------------------------------------------------------
        | Sejarah
        |--------------------------------------------------------------------------
        */

        $table->date('tanggal_berdiri')->nullable();
        $table->longText('sejarah')->nullable();

        /*
        |--------------------------------------------------------------------------
        | Visi
        |--------------------------------------------------------------------------
        */

        $table->longText('visi')->nullable();

        /*
        |--------------------------------------------------------------------------
        | Gambaran Umum
        |--------------------------------------------------------------------------
        */

        $table->longText('gambaran_umum')->nullable();

        $table->unsignedInteger('jumlah_penduduk')->nullable();
        $table->unsignedInteger('jumlah_laki_laki')->nullable();
        $table->unsignedInteger('jumlah_perempuan')->nullable();
        $table->unsignedInteger('jumlah_kk')->nullable();
        $table->unsignedInteger('jumlah_jorong')->nullable();

        $table->string('luas_wilayah')->nullable();

        /*
        |--------------------------------------------------------------------------
        | Letak Wilayah
        |--------------------------------------------------------------------------
        */

        $table->string('provinsi')->nullable();
        $table->string('kabupaten')->nullable();
        $table->string('kecamatan')->nullable();
        $table->string('ketinggian')->nullable();
        $table->string('kode_pos')->nullable();

        $table->text('peta')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
