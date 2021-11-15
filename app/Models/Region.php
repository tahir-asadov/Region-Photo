<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    
    protected $fillable = ['title', 'slug'];

    use HasFactory;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
