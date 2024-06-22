<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmUserAccessTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_user_access', function (Blueprint $table) {

		$table->string('userid',100)->default('');
		$table->string('userpwd',100)->nullable()->default('NULL');
		$table->string('usergrp',1)->nullable()->default('NULL');
		$table->string('username',100)->nullable()->default('NULL');
		$table->string('usermail',100)->nullable()->default('NULL');
		$table->integer('userskop',5)->nullable()->default('NULL');
		$table->string('usermenu',50)->nullable()->default('NULL');
		$table->primary('userid');

        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_user_access');
    }
}