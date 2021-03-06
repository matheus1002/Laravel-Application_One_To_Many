<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['street','number','city','state']; 

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
