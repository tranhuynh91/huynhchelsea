<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVuviecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('vuviec', function (Blueprint $table) {
                $table->increments('id');
                $table->string('maxa')->nullable();
                $table->string('mahuyen')->nullable();
                $table->string('mavuviec')->nullable();
                $table->string('sovanban')->nullable();
                $table->date('ngaycongvan')->nullable();
                $table->date('ngaynhapvv')->nullable();
                $table->date('hanthuly')->nullable();
                $table->date('hanxacminh')->nullable();
                $table->date('hangiaiquyet')->nullable();
                $table->string('nguondon')->nullable();
                $table->string('cqcd')->nullable();
                $table->string('plnguyendon')->nullable();
                $table->string('donthu')->nullable();
                $table->string('soluong')->nullable();
                $table->string('hotennnd')->nullable();
                $table->date('gioitinh')->nullable();
                $table->date('ngaysinh')->nullable();
                $table->string('cmnd')->nullable();
                $table->date('ngaycapcmnd')->nullable();
                $table->string('noicapcmnd')->nullable();
                $table->string('sdtnd')->nullable();
                $table->string('dantoc')->nullable();
                $table->string('quoctich')->nullable();
                $table->string('plbidon')->nullable();
                $table->string('hotenbd')->nullable();
                $table->string('chucvubd')->nullable();
                $table->string('coquanbd')->nullable();
                $table->string('pldonthu')->nullable();
                $table->string('linhvucdt')->nullable();
                $table->string('lankt')->nullable();
                $table->string('noidungdt')->nullable();
                $table->string('lydoktlan2')->nullable();//lý do khiếu tố lân 2
                $table->string('tinhchatvv')->nullable();
                $table->string('dieukientl')->nullable();
                $table->string('vanbanqd')->nullable();//văn bản quy định
                $table->string('thamquyengq')->nullable();//thẩm quyền giải quyết
                $table->string('plthamquyen')->nullable();
                $table->string('cqdgq')->nullable(); //cơ quan đã giải quyết
                $table->string('ttgq')->nullable(); //trình tự giải quyết
                $table->string('kqdgq')->nullable();//kết quả đã giải quyết
                $table->string('hxltt')->nullable();//hướng xử lý tiếp theo
                $table->string('cqgqt')->nullable();//cư quan giải quyết tiếp
                $table->date('ngayhentra')->nullable();
                $table->string('thuly')->nullable();
                $table->string('qdthuly')->nullable();
                $table->string('ngayqdthuly')->nullable();
                $table->string('trangthaihoso')->nullable();

                $table->string('ipt1')->nullable();
                $table->string('ipf1')->nullable();
                $table->string('ipt2')->nullable();
                $table->string('ipf2')->nullable();
                $table->string('ipt3')->nullable();
                $table->string('ipf3')->nullable();
                $table->string('ipt4')->nullable();
                $table->string('ipf4')->nullable();
                $table->string('ipt5')->nullable();
                $table->string('ipf5')->nullable();
                $table->string('ipt6')->nullable();
                $table->string('ipf6')->nullable();
                $table->string('ipt7')->nullable();
                $table->string('ipf7')->nullable();
                $table->string('ipt8')->nullable();
                $table->string('ipf8')->nullable();
                $table->string('ipt9')->nullable();
                $table->string('ipf9')->nullable();
                $table->string('ipt10')->nullable();
                $table->string('ipf10')->nullable();
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
