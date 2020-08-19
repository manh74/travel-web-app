<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    protected $fillable = [
        'id', 'idUser', 'content', 'idNews'
    ];

    public function news(){
    	return $this->belongsTo('App\News','idNews','id');
    }

}
