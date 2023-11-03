<?php

namespace App\Models;

use App\Models\Episode;
use Illuminate\Database\Eloquent\Model;
use RyanChandler\Comments\Concerns\HasComments;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnimeKu extends Model
{
    use HasFactory, HasComments;

    protected $table="Anime_Ku";

    protected $fillable = [
        "judul",
        "Deskripsi_anime",
        "Gambar_anime",
        "author",
        "type",
        "studio",
        "Status",
        "Genre",
        "Duration",
        "Quality",
    ];

    public function episode(): HasOne
    {
        return $this->hasOne(Episode::class, 'anime_id');
    }
    public function Wishlist(): HasOne
    {
        return $this->hasOne(Wishlist::class, 'anime_id');
    }

}