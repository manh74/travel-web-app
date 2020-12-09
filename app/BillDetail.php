<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = "bill_details";
    protected $fillable = [
        'id_bill', 'id_tour','id_user','price','quantity','status'
    ];
}
