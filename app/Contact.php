<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contacts";
    protected $fillable = [
        'id'
,'address'
,'phone_number'
,'email'
,'working_date'
,'url'
    ];
}
