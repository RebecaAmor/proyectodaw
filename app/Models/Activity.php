<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table= 'activity';

    protected $fillable = [
        'class', 'description', 'date', 'schedule', 'trainner','room',
    ];

    public $timestamps = false;
}