<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrtTblNgansach extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ngansach', function (Blueprint $table) {
            $table->increments('ngansach_id');
            $table->string('ngansach_amount');
            $table->string('ngansach_describe');
            $table->string('ngansach_status');
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
        Schema::dropIfExists('tbl_ngansach');
    }
}
