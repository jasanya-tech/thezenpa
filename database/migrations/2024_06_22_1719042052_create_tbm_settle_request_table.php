<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmSettleRequestTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_settle_request', function (Blueprint $table) {

            $table->string('bankname', 100)->nullable()->default('NULL');
            $table->string('bankacct', 50)->nullable()->default('NULL');
            $table->string('accholder', 100)->nullable()->default('NULL');
            $table->string('swfcode', 15)->nullable()->default('NULL');
            $table->string('filename', 250)->nullable()->default('NULL');
            $table->datetime('trxdate')->nullable()->default('NULL');
            $table->increments("trxid");
            $table->string('stl_status', 15)->nullable()->default('NULL');
            $table->string('biller_code', 30)->nullable()->default('NULL');
            $table->string('phone', 30)->nullable()->default('NULL');
            $table->primary('trxid');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_settle_request');
    }
}
