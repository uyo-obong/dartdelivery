<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $fillable = [
        'shipper_firstN', 'shipper_lastN', 'shipper_phone', 'shipper_address',
        'shipper_city', 'shipper_state', 'shipper_country', 'receiver_firstN', 'receiver_lastN',
        'receiver_phone', 'receiver_address', 'receiver_city', 'receiver_state',
        'receiver_country', 'slug', 'tracking_no', 'type_id', 'weight', 'user_id',
        'qty','transport_id','status', 'shipper_email', 'receiver_postal', 'shipper_postal'
    ];

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function transport()
    {
        return $this->belongsTo('App\Transport');
    }

    public function tracking()
    {
        return $this->belongsTo('App\Tracking');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }


}
