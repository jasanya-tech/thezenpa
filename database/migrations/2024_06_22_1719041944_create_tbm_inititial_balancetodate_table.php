<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmInititialBalancetodateTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_inititial_balancetodate', function (Blueprint $table) {
            $table->datetime('initb_datetime');
            $table->increments("initb_log");
            $table->primary('initb_log');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_inititial_balancetodate');
    }
}
