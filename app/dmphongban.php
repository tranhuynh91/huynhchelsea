<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dmphongban extends Model
{
    protected $table = 'dmphongban';
    protected $fillable = [
        'id',
        'maxa',
        'mahuyen',
        'matinh',
        'tenphongban',
        'diachiphongban',
        'tendv',
        'tenct',

    ];
}
