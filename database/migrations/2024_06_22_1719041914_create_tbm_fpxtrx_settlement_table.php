<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmFpxtrxSettlementTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_fpxtrx_settlement', function (Blueprint $table) {

            $table->string('rsp_biller_code', 20)->nullable()->default('NULL');
            $table->string('rsp_order_no', 30)->default('');
            $table->string('rsp_fpx_id', 30)->nullable()->default('NULL');
            $table->string('trx_settlement_status', 1)->nullable()->default('NULL');
            $table->date('trx_settlement_date')->nullable()->default('NULL');
            $table->increments("trx_ref_id");
            $table->string('trx_ref_doc', 30)->nullable()->default('NULL');
            $table->primary('trx_ref_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_fpxtrx_settlement');
    }
}
