<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = "tours";
    protected $fillable = [
        'id', 'title', 'summarize', 'content', 'image', 'id_type', 'price', 'on_sale', 'schedule'
    ];

    public function tour_type(){
    	return $this->belongsTo('App\TypeTour','id_type','id');
    }

    public function favorite(){
    	return $this->hasMany('App\FavoriteTour','idTour','id');
    }


}
