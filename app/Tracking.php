<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    public function shipping()
    {
        return $this->belongsTo('App\Shipping');
    }
}
