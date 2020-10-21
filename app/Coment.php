<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    protected $fillable = [
        'comentario', 'post_id'
    ];
    public function Posts(){
        return $this->belongsTo(Post::class);
    }
    
}
