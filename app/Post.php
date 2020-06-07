<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function author()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('post_id');
    }
 
}
