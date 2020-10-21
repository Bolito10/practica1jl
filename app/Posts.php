<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'post', 'user_id'
    ];
    public function Coment(){
        return $this->hasMany(Coment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


}
