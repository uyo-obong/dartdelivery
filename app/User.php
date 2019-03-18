<?php

namespace App;

use App\Notifications\MailResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MailResetPassword($token));
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email',
        'password', 'phone_number', 'city',
        'state', 'country', 'address', 'postal_code', 'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function shipping()
    {
        return $this->belongsTo('App\Shipping');
    }
}
