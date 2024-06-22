<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmUserAccessSessionTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_user_access_session', function (Blueprint $table) {

            $table->string('userid', 100)->default('');
            $table->string('login_session', 100)->nullable()->default(null);
            $table->datetime('session_in_dtime')->nullable()->default(null);
            $table->increments("logid");
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_user_access_session');
    }
}
