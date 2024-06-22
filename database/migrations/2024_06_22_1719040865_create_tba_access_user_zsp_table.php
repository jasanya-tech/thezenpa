<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbaAccessUserZspTable extends Migration
{
    public function up()
    {
        Schema::create('tba_access_user_zsp', function (Blueprint $table) {
            $table->string('nama', 100)->nullable()->default('NULL');
            $table->string('nokp', 14)->nullable()->default('NULL');
            $table->string('usergrp', 3)->nullable()->default('NULL');
            $table->string('email', 100)->nullable()->default('NULL');
            $table->string('userid', 20)->default('');
            $table->string('userpwd', 50)->nullable()->default('NULL');
            $table->string('usrstatus', 1)->default('A');
            $table->string('hashkey', 50)->nullable()->default('NULL');
            $table->string('biller_ref_code', 20)->nullable()->default('NULL');
            $table->datetime('updatetime')->nullable()->default('NULL');
            $table->integer('memberid', 11)->default('0');
            $table->primary('userid');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tba_access_user_zsp');
    }
}
