<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    public function Posts(){
        return $this->belongsTo(Post::class);
    }
    
}
