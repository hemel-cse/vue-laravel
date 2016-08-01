<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
     protected $fillable = [
        'title', 'description', 'category'
    ];

    public function category()
    {
        return $this->belongsToMany('App\Category')->withTimestamps();
    } 
}
