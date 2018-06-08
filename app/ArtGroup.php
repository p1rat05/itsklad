<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtGroup extends Model
{
    protected $fillable = [
        'name',
    ];

    protected $hidden = [];
}
