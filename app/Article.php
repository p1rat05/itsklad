<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'idArtGroup',
        'model',
        'idTM',
        'idParent',
        'idUser',
        'DateBought',
        'ArtData',
        'Description',
    ];

    protected $hidden = [];
}
