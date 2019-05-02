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
        'cqcd',// cơ quan chuyển đơn
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
        'linhvucdt',//lĩnh vực đơn thư
        'lankt',// lần khiếu tố
        'noidungdt',//nội dung đơn thư
        'lydoktlan2',//lý do khiếu tố lân 2
        'tinhchatvv',//tính chất vụ việc
        'dieukientl',//điều kiện
        'vanbanqd',//văn bản quy định
        'thamquyengq',//thẩm quyền giải quyết
        'plthamquyen',// phân loại thẩm quyền
        'cqdgq', //cơ quan đã giải quyết
        'ttgq', //trình tự giải quyết
        'kqdgq',//kết quả đã giải quyết
        'hxltt',//hướng xử lý tiếp theo
        'cqgqt',//cư quan giải quyết tiếp
        'ngayhentra',
        'thuly',
        'qdthuly',//quyết định thụ lý
        'ngayqdthuly',//ngày tháng quyết định thụ lý
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
