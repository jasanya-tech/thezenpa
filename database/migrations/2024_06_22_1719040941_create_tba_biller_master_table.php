<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbaBillerMasterTable extends Migration
{
    public function up()
    {
        Schema::create('tba_biller_master', function (Blueprint $table) {

            $table->increments("biller_id");
            $table->string('biller_exchange', 20);
            $table->string('biller_seller', 20);
            $table->string('biller_name', 200);
            $table->integer('biller_group_code', 4)->nullable()->default('NULL');
            $table->string('biller_gateway', 4)->default('ZENP');
            $table->primary('biller_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tba_biller_master');
    }
}
