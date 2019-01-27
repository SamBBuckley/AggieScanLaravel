<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAggieScanUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aggie_scan_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('uin');
            $table->string('cell_num');
            $table->string('password');
            $table->string('facebook');
            $table->string('snap');
            $table->string('twitter');
            $table->string('major');
            $table->string('year');
            $table->string('password');

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
        Schema::dropIfExists('aggie_scan_users');
    }
}
