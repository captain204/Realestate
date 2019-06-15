<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replies extends Model
{
    protected $fillable = [

        'posts_id',
        'reply',
        'user_id',
        

    ];

}
