<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vuviec extends Model
{
    protected $table = 'vuviec';
    protected $fillable = [
        'id',
        'maxa',
        'mahuyen',
        'mavuviec',
        'sovanban',
        'ngaycongvan',
        'ngaynhapvv',
        'hanthuly',
        'hanxacminh',
        'hangiaiquyet',
        'nguondon',
        'cqcd',
        'plnguyendon',
        'donthu',
        'soluong',
        'hotennnd',
        'gioitinh',
        'ngaysinh',
        'cmnd',
        'ngaycapcmnd',
        'noicapcmnd',
        'sdtnd',
        'dantoc',
        'quoctich',
        'plbidon',
        'hotenbd',
        'chucvubd',
        'coquanbd',
        'pldonthu',
        'linhvucdt',
        'lankt',
        'noidungdt',
        'lydoktlan2',//lý do khiếu tố lân 2
        'tinhchatvv',
        'dieukientl',
        'vanbanqd',//văn bản quy định
        'thamquyengq',//thẩm quyền giải quyết
        'plthamquyen',
        'cqdgq', //cơ quan đã giải quyết
        'ttgq', //trình tự giải quyết
        'kqdgq',//kết quả đã giải quyết
        'hxltt',//hướng xử lý tiếp theo
        'cqgqt',//cư quan giải quyết tiếp
        'ngayhentra',
        'thuly',
        'qdthuly',
        'ngayqdthuly',
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
