<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable 
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','lastname1','lastname2','rango', 'email', 'password','state','avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    public function setPasswordAttribute($password)
    {
        $this->attributes['password']=bcrypt($password);
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this ->belongsToMany(Role::class);
    }

    public function hasRoles(array $roles)
    {
        foreach ($roles as $role)
        {
            foreach ($this->roles as $userRole)
            {
                if ($userRole->name==$role)
                {
                    return true;
                }
            }
        }

        return false;
    }

    public function isAdmin()
    {
        return $this->hasRoles(['admin']);
    }
}
