<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDmphongbanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dmphongban', function (Blueprint $table) {
            $table->increments('id');
            $table-> string('maxa')->nullable();
            $table-> string('mahuyen')->nullable();
            $table-> string('matinh')->nullable();
            $table-> string('tenphongban')->nullable();
            $table-> string('diachiphongban')->nullable();
            $table-> string('tendv')->nullable();
            $table-> string('tenct')->nullable();
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
