<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subtype extends Model
{
    protected $fillable = [
        'id', 'treatment_id','name','charges',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
