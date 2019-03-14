<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function admin()
    {
        return $this->belongsToMany(Admin::class, 'admin_roles');
    }
}
