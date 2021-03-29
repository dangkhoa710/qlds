<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrtTblKehoach extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kehoach', function (Blueprint $table) {
            $table->increments('kehoach_id');
            $table->string('kehoach_time');
            $table->string('kehoach_describe');
            $table->string('kehoach_join');
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
        Schema::dropIfExists('tbl_kehoach');
    }
}
