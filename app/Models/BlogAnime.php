<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogAnime extends Model
{
    use HasFactory;


    protected $table="blog_animes";

    protected $fillable = [
        "user_id",
        "nama_anime",
        "deskripsi_anime_coming_soon",
        "gambar_anime_coming_soon",
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}