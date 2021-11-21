<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'slug', 'region_id', 'city_id', 'village_id', 'user_id'];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    
    public function village()
    {
        return $this->belongsTo(Village::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public function thumbnail() {
        $galleries = $this->galleries->first();
        if($galleries) {
            return str_replace('public', '', $galleries->path);
        }
        return false;
    }

    public function path()
    {
        $slug = Str::slug($this->title);
        return route('public.post', [$slug, $this->id]);
        // return "/p/{$slug}/{$this->id}";
    }
    

}
