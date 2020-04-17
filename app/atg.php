<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class atg extends Model
{
    protected $fillable = [
        'name', 'email', 'pincode'
    ];
}
