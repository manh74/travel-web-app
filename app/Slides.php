<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slides extends Model
{
    protected $table = "slide";
    protected $fillable = [
        'name', 'image'
    ];
}
