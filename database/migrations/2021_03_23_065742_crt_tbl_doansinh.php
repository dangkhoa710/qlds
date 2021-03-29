<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrtTblDoansinh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_doansinh', function (Blueprint $table) {
            $table->increments('doansinh_id');
            $table->string('doansinh_dob');
            $table->string('doansinh_phone');
            $table->string('doansinh_level');
            $table->string('doansinh_rank');
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
        Schema::dropIfExists('tbl_doansinh');
    }
}
