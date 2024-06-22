<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbaAccessControlTable extends Migration
{
    public function up()
    {
        Schema::create('tba_access_control', function (Blueprint $table) {
            $table->increments("lognum");
            $table->datetime('logdtime')->nullable()->default('NULL');
            $table->string('uname', 150)->nullable()->default('NULL');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tba_access_control');
    }
}
