<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiepDanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiepdan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('maxa')->nullable();
            $table->string('mahuyen')->nullable();
            $table->string('mavuviectd')->nullable();
            $table->string('canbotd')->nullable();
            $table->date('ngaythangtd')->nullable();
            $table->string('phanloaitd')->nullable();
            $table->string('phanloaivc')->nullable();
            $table->string('hotencd')->nullable();
            $table->date('ngaysinh')->nullable();
            $table->string('cmnd')->nullable();
            $table->date('ngaycapcmnd')->nullable();
            $table->string('noicapcmnd')->nullable();
            $table->string('diachicd')->nullable();
            $table->string('plnoidung')->nullable();
            $table->string('plchitiet')->nullable();
            $table->string('noidungtbcd')->nullable();
            $table->string('coquandgq')->nullable();
            $table->string('huongxl')->nullable();
            $table->string('kqtd')->nullable();
            $table->string('tdgq')->nullable();
            $table->string('ghichu')->nullable();
            $table->string('canbotd1')->nullable();
            $table->string('canbotd2')->nullable();
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
            $table->timestamps();
        });
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
