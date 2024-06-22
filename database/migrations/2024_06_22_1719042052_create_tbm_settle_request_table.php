<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmSettleRequestTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_settle_request', function (Blueprint $table) {

            $table->string('bankname', 100)->nullable()->default(null);
            $table->string('bankacct', 50)->nullable()->default(null);
            $table->string('accholder', 100)->nullable()->default(null);
            $table->string('swfcode', 15)->nullable()->default(null);
            $table->string('filename', 250)->nullable()->default(null);
            $table->datetime('trxdate')->nullable()->default(null);
            $table->increments("trxid");
            $table->string('stl_status', 15)->nullable()->default(null);
            $table->string('biller_code', 30)->nullable()->default(null);
            $table->string('phone', 30)->nullable()->default(null);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_settle_request');
    }
}
