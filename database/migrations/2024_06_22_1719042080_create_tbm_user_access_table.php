<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmUserAccessTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_user_access', function (Blueprint $table) {

            $table->string('userid', 100)->default('');
            $table->string('userpwd', 100)->nullable()->default(null);
            $table->string('usergrp', 1)->nullable()->default(null);
            $table->string('username', 100)->nullable()->default(null);
            $table->string('usermail', 100)->nullable()->default(null);
            $table->tinyInteger('userskop')->nullable()->default(null);
            $table->string('usermenu', 50)->nullable()->default(null);
            $table->primary('userid');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_user_access');
    }
}
