<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dscanbo extends Model
{
    protected $table = 'dscanbo';
    protected $fillable = [
        'id',
        'macb',
        'tencb',
        'chucvu',
        'phongban',
        'nhiemvu',
        'tkql',
        'capql',
        'maxa',
        'mahuyen',
        'tendonvi'
    ];
}
