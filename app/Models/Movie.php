<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['image_url', 'title', 'genre', 'director' , 'year', 'storyline'];

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
