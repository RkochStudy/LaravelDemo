<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','content'];

    public function likes ()
    {
        return $this->hasMany('App\like');
    }

    public function tags()
    {
        return $this->BelongsToMany('App\Tag', 'post_tag', 'post_id', 'tag_id')
        ->withTimestamps();
    }

}
