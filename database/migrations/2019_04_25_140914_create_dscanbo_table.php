<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDscanboTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dscanbo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('macb')->nullable();
            $table->string('tencb')->nullable();
            $table->string('chucvu')->nullable();
            $table->string('phongban')->nullable();
            $table->string('nhiemvu')->nullable();
            $table->string('capql')->nullable();
            $table->string('tkql')->nullable();
            $table->string('maxa')->nullable();
            $table->string('mahuyen')->nullable();
            $table->string('tendonvi')->nullable();
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
