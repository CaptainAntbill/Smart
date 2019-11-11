<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseAccessory extends Model
{
    protected $table = 'purchase_accessories';
    protected $fillable = ['order', 'price', 'date_order', 'accessory_id', 'provider_id'];

    public function provider(){
        return $this->belongsTo('App\Provider');
    }

    public function accessory(){
        return $this->belongsTo('App\Accessory');
    }
}
