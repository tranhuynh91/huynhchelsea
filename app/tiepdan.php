<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiepDan extends Model
{
    protected $table = 'tiepdan';
    protected $fillable = [
        'id',
        'maxa',
        'mahuyen',
        'mavuviectd',
        'canbotd',
        'ngaythangtd',
        'phanloaitd',
        'phanloaivc',
        'hotencd',
        'ngaysinh',
        'cmnd',
        'ngaycapcmnd',
        'noicapcmnd',
        'diachicd',
        'plnoidung',
        'plchitiet',
        'noidungtbcd',
        'coquandgq',
        'huongxl',
        'kqtd',
        'tdgq',
        'ghichu',
        'canbotd1',
        'canbotd2',
        'trangthaihoso',

        'ipt1',
        'ipf1',
        'ipt2',
        'ipf2',
        'ipt3',
        'ipf3',
        'ipt4',
        'ipf4',
        'ipt5',
        'ipf5',
        'ipt6',
        'ipf6',
        'ipt7',
        'ipf7',
        'ipt8',
        'ipf8',
        'ipt9',
        'ipf9',
        'ipt10',
        'ipf10',
    ];
}
