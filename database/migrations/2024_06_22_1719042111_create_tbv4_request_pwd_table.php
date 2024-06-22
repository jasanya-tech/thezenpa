<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbv4RequestPwdTable extends Migration
{
    public function up()
    {
        Schema::create('tbv4_request_pwd', function (Blueprint $table) {

            $table->string('userid', 33);
            $table->string('session_id', 50);
            $table->datetime('reqtime');
            $table->datetime('exptime');
            $table->increments("logid");
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbv4_request_pwd');
    }
}
