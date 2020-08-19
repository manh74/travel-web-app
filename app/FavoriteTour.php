<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoriteTour extends Model
{
    protected $table = "favorite_tours";
    protected $fillable = [
        'id', 'idUser', 'idTour'
    ];

    public function tour(){
    	return $this->belongsTo('App\Tous','idTour','id');
    }

}
