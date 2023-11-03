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
        Schema::create('anime_ku', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 255);
            $table->string('Deskripsi_anime', 1000);
            $table->string('Gambar_anime');
            $table->string('author');
            $table->enum('type', ['TV_Series', 'Movie']);
            $table->string('studio');
            $table->enum('Status', ['Airing', 'Not_Airing']);
            $table->enum('Genre', ['Action', 'Adventure', 'Fantasy', 'Magic', 'Drama', 'Romance', 'Mystery', 'Horor', 'Isekai', 'Harem', 'Supernatural', 'Sports', 'Science Fiction', 'Slice_of_life', 'Music', 'Shoujo', 'Shounen']);
            $table->string('Duration');
            $table->enum('Quality', ['HD', 'Full_HD', 'Ultra_HD', 'SD', 'LD']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anime_ku');
    }
};