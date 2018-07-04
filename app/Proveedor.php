<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $fillable = [
        'ruc', 'name', 'logo','email','address','city',
        'country','type','origin','phone1','phone2',
        'contact','notes','status'
    ];
}
