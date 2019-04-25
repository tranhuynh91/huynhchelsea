<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoidonghoagiai extends Model
{
    protected $table = 'hoagiai';
    protected $fillable = [
        'id',
        'ngaythangtlhdhg',
        'chitichhdhg',
        'chucvuhdhg',
        'diachihdhg',
        'thanhvienhdhg',
        'chucvutvhdhg',
        'donvitvhdhg',
        'hoagiailan2',
    ];
}
