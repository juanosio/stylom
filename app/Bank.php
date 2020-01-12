<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = [
        'code', 'name'
    ];

    public function compra(){
        return $this->hasMany(Compra::class);//Mucho a muchos
    }
}
