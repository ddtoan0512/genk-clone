<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * relationship with permissions.
     */
    public function permissions()
    {
        return $this->belongsToMany('App\Permission');
    }

    /**
     * relationship with users.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
