<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchase';
    protected $fillable = ['order', 'price', 'date_order', 'provider_id', 'phone_id'];

    public function provider(){
        return $this->belongsTo('App\Provider');
    }

    public function phone(){
        return $this->belongsTo('App\Phone');
    }
}
