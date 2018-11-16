<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsfeed extends Model
{
    //
    protected $fillable = [
        'title',
        'priority',
        'date',
        'content'
    ];

}
