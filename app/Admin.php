<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    //
    use Notifiable;

    /**
     * inform the authenticatable model to use the admin guard
     * for authorisation and authentication
     * @var string
     */
    protected $guarded = ['admin'];

    protected $table = 'admins';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        /*'name',*/ 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * navigation method that connects admin with role
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
