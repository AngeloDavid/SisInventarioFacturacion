<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    protected $fillable = [
        'percent', 'name','default','status'
    ];
    public function allTaxes()
    {
       return $this->belongsToMany('App\Product')
       ->withTimestamps();
    }
}
