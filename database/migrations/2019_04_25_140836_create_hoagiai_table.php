<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoagiaiBlade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('hoagiai', function (Blueprint $table) {
                $table->increments('id');
                $table->string('maxa')->nullable();
                $table->string('mahuyen')->nullable();
                $table->string('mahoso')->nullable();
                $table->string('sothuly')->nullable();
                $table->string('canbotd')->nullable();
                $table->date('ngaynhandon')->nullable();
                $table->string('nguondon')->nullable();
                $table->string('hotennld')->nullable();
                $table->date('ngaysinhnld')->nullable();
                $table->string('gioitinhnld')->nullable();
                $table->string('diachinld')->nullable();
                $table->string( 'cmndnld')->nullable();
                $table->string( 'nguoilienquan')->nullable();
                $table->date( 'ngaysinhnlq')->nullable();
                $table->string('gioitinhnlq')->nullable();
                $table->string( 'diachinlq')->nullable();
                $table->string('cmndnlq')->nullable();
                $table->string('noidung')->nullable();
                $table->string('trangthaihoso')->nullable();
                $table->date('ngayqdtt')->nullable();//,ngày quyết định thẩm tra
                $table->date('ngayhhtt')->nullable();//nhày hết hạn thẩm tra
                $table->string('chucvunrqdtt')->nullable();//quyết định nhười ra quyết định thẩm tra
                $table->string('cancurqdtt')->nullable();//căn cứ ra quyết định thẩm tra
                $table->date('ngaybckqtt')->nullable();//ngày báo cáo kết quả thẩm tra
                $table->string('chucvunrkqtt')->nullable(); //chức vụ người ra kết quả thẩm tra
                $table->string('cancubckq')->nullable();//căn cứ báo cáo kết quả
                $table->string('noidungttkqtt')->nullable();//nội dung tóm tắt kết quả thẩm tra
                $table->date('ngayhoagiai')->nullable();
                $table->string('noidunghoagiai')->nullable();
                $table->string('kqhoagiai')->nullable();
                $table->string('ngayhoagiailan2')->nullable();
                $table->string('noidunghoagiailan2')->nullable();
                $table->string('ketquahoagiailan2')->nullable();
                $table->string('phanloaixuly')->nullable();
                $table->string('trangthaihoso')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
