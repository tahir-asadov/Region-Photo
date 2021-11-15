<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    
    protected $fillable = ['title', 'slug'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    use HasFactory;
}
