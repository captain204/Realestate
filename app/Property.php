<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    


    protected $fillable = [

    	'name',
    	'description',
    	'price',
		'contact',
		'agent_id',
    	'image',
    	'state',

    ];




}
