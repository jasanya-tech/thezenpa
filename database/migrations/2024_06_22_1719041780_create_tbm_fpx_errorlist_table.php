<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmFpxErrorlistTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_fpx_errorlist', function (Blueprint $table) {

		$table->string('error_code',3);
		$table->string('error_desc',60);
		$table->primary('error_code');

        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_fpx_errorlist');
    }
}