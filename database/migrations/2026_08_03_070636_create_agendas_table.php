<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('agendas', function (Blueprint $table) {

            $table->id();

            $table->string('title');

            $table->string('slug')->unique();

            $table->string('thumbnail')->nullable();

            $table->longText('description');

            $table->string('location');

            $table->date('date');

            $table->time('time');

            $table->enum('status', [
                'Draft',
                'Publish'
            ])->default('Draft');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
