<?php

namespace App\Models;

use App\Models\AnimeKu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Episode extends Model
{
    use HasFactory;


    protected $table="episodes";

    protected $fillable = [
        "episode_number",
        "anime_id",
        "manga_animeku",
    ];



    public function animeku(): BelongsTo
    {
        return $this->belongsTo(AnimeKu::class, 'anime_id');
    }
        

}