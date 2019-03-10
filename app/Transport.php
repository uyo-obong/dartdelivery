<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    public function shipping()
    {
        return $this->hasOne('App\Shipping');
    }
}
