<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoidonghoagiaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoidonghoagiai', function (Blueprint $table) {
            $table->string('id');
            $table->date('ngaythangtlhdhg')->nullable();
            $table->string('chitichhdhg')->nullable();
            $table->string('chucvuhdhg')->nullable();
            $table->string('diachihdhg')->nullable();
            $table->string('thanhvienhdhg')->nullable();
            $table->string('chucvutvhdhg')->nullable();
            $table->string('donvitvhdhg')->nullable();
            $table->string('hoagiailan2')->nullable();
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
