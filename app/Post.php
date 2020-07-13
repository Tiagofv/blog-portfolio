<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $guarded = ['id'];

    protected  $casts = ['published' => 'boolean'];
    public function author(){
        return $this->belongsTo('App\User', 'author', 'id');
    }
    public function getRouteKeyName(){
        return 'slug';
    }
}
