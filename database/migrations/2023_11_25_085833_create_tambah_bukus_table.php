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
        Schema::create('tambah_bukus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('thumbnail');
            $table->longText('deskripsi');
            $table->enum('genre', ['Roman', 'Horor', 'Klasik', 'Puisi', 'Spritual', 'Fantasi']);
            $table->string('link');
            $table->string('view');
            $table->string('chapter');
            $table->string('vote');
            $table->string('author');
            $table->string('date');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tambah_bukus');
    }
};
