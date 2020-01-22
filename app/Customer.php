<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'nationality', 'occupation', 'birthday'];

    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

}
