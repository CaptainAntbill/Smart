<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phones';
    protected $fillable = ['model', 'quantity', 'price', 'spectrum_id', 'brand_id'];

    public function purchases(){
        return $this->hasMany('App\Purchase');
    }

    public function brand(){
        return $this->belongsTo('App\Brand');
    }

    public function spectrum(){
        return $this->belongsTo('App\Spectrum');
    }

}
