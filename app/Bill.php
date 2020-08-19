<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    
    protected $table = "bills";
    protected $fillable = [
        'id_customer', 'check_in','check_out','room','note','total'
    ];
}
