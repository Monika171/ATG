<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class atg extends Model
{

    protected $table = 'atgs';
    
    protected $fillable = [
        'name', 'email', 'pincode'
    ];
}
