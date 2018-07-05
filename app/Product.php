<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'cod', 'cod2', 'name','photo','pvb','cost',
        'type','display','notes','enableSell','cantMin',
        'status'
    ];

    public function allTaxes()
    {
       return $this->belongsToMany('App\Tax')
       ->withTimestamps();
    }
}
