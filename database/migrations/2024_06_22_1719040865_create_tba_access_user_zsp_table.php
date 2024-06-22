<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbaAccessUserZspTable extends Migration
{
    public function up()
    {
        Schema::create('tba_access_user_zsp', function (Blueprint $table) {
            $table->string('nama', 100)->nullable()->default(null);
            $table->string('nokp', 14)->nullable()->default(null);
            $table->string('usergrp', 3)->nullable()->default(null);
            $table->string('email', 100)->nullable()->default(null);
            $table->string('userid', 20)->default('');
            $table->string('userpwd', 50)->nullable()->default(null);
            $table->string('usrstatus', 1)->default('A');
            $table->string('hashkey', 50)->nullable()->default(null);
            $table->string('biller_ref_code', 20)->nullable()->default(null);
            $table->datetime('updatetime')->nullable()->default(null);
            $table->integer('memberid')->default(0);
            $table->primary('userid');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tba_access_user_zsp');
    }
}
