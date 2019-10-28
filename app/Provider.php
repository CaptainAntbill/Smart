<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'providers';
    protected $fillable = ['name', 'addres', 'phone'];

    public function purchases(){
        return $this->hasMany('App\Purchase');
    }
}
