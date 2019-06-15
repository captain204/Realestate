<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agents extends Model
{
    
    
    protected $fillable = [

    	'name',
        'contact',
        'about',
        'image',
        'email',
        'facebook',
        'twiter',
        'instagram',
    ];

}
