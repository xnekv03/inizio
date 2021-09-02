<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guarded = [];
    public $timestamps =false;

    protected $casts = [
        'last_update' => 'datetime:Y-m-d',
    ];

}