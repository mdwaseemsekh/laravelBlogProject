<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title','content','image','category'
    ];
    protected static function boot() { 
        parent::boot(); 
        static::saving(function ($post) {
        $post->slug = Str::slug($post->title); 
        });
            
            
            
    }
             
}
