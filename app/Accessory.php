<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    protected $table = 'accessories';
    protected $fillable = ['name', 'price', 'quantity', 'brand_id'];

    public function purchase_accesory(){
        return $this->hasMany('App\PurchaseAccesory');
    }

    public function brand(){
        return $this->belongsTo('App\Brand');
    }
}
