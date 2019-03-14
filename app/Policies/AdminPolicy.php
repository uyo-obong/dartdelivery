<?php

namespace App\Policies;

use App\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;

    public function view(Admin $admin)
    {

        return $this->getRole($admin, 1);
    }

    protected function getRole($admin, $role_id){
        foreach ($admin->role as $rol) {

            if ($rol->id == $role_id) {

                return true;
            }

        }
        return false;
    }
}
