<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoagiai extends Model
{
    protected $table = 'hoagiai';
    protected $fillable = [
        'id',
        'maxa',
        'mahuyen',
        'mahoso',
        'sothuly',
        'canbotd',
        'ngaynhandon',
        'nguondon',
        'hotennld',
        'ngaysinhnld',
        'gioitinhnld',
        'diachinld',
        'cmndnld',
        'nguoilienquan',
        'ngaysinhnlq',
        'gioitinhnlq',
        'diachinlq',
        'cmndnlq',
        'noidung',
        'trangthaihoso',
        'ngayqdtt',//ngày quyết định thẩm tra
        'ngayhhtt',//nhày hết hạn thẩm tra
        'chucvunrqdtt',//quyết định nhười ra quyết định thẩm tra
        'cancurqdtt',//căn cứ ra quyết định thẩm tra
        'ngaybckqtt',//ngày báo cáo kết quả thẩm tra
        'chucvunrkqtt', //chức vụ người ra kết quả thẩm tra
        'cancubckq',//căn cứ báo cáo kết quả
        'noidungttkqtt',//nội dung tóm tắt kết quả thẩm tra
        'ngayhoagiai',
        'noidunghoagiai',
        'kqhoagiai',
        'ngayhoagiailan2',
        'noidunghoagiailan2',
        'ketquahoagiailan2',
        'phanloaixuly',
        'trangthaihoso',
    ];
}
