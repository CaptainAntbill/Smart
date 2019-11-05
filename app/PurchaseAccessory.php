<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseAccessory extends Model
{
    protected $table = 'purchase_accessory';
    protected $fillable = ['order', 'price', 'date_order', 'accessory_id', 'provider_id'];

    public function provider(){
        return $this->belongsTo('App\Provider');
    }

    public function phone(){
        return $this->belongsTo('App\Accessory');
    }
}
