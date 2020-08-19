<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeTour extends Model
{
    protected $table = "type_tours";
    protected $fillable = [
        'id', 'name'
    ];

    public function tour(){
    	return $this->hasMany('App\TypeTour','id_type','id');
    }
}
