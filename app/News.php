<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";
    protected $fillable = [
        'title', 'summarize', 'content', 'image', 'view_number'
    ];

    public function comments(){
    	return $this->hasMany('App\Comment','idNews','id');
    }

    public function users(){
    	return $this->belongsTo('App\User','idUser','id');
    }
}
