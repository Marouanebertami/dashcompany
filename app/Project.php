<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

    protected $fillable = [
        'name', 'description', 'maket', 'date_start', 'date_end'
    ];

}
