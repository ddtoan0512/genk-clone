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
        'name','username', 'phone' , 'address', 'email', 'password',
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
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts(){
        return $this->hasMany('App\Post');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function assignRole(Role $role)
    {
        return $this->roles()->save($role);
    }

    /**
     * Check if user is super admin.
     *
     * @return boolean
     */
    public function isSuperAdmin()
    {
        return !!$this->roles->where('slug', 'admin')->count();
    }

    public function hasPermission($permission)
    {
        $permission = Permission::with('roles')->where('code', $permission)->first();
        return !!$permission->roles->intersect($this->roles)->count();
    }
}
