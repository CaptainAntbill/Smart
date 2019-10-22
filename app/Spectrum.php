<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spectrum extends Model
{
    protected $table = 'spectrum';
    protected $fillable = ['type_spectrum'];

    public function phones(){
        return $this->hasMany('App\Phone');
    }
}
