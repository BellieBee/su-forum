<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use HttpOz\Roles\Traits\HasRole;
use HttpOz\Roles\Contracts\HasRole as HasRoleContract;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements HasRoleContract
{
    use Notifiable, HasRole;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'country', 
        'id_role', 
        'address', 
        'phone', 
        'birthdate',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
        'created_at',
        'updated_at'
    ];

    public function topic()
    {
        return $this->hasMany('App\Topic');
    }

    public function coments()
    {
        return $this->hasMany('App\Coments');
    }
}
