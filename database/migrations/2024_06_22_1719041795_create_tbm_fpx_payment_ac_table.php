<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmFpxPaymentAcTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_fpx_payment_ac', function (Blueprint $table) {

            $table->string('rsp_exchangeid', 20)->nullable()->default(null);
            $table->string('rsp_sellerid', 20)->nullable()->default(null);
            $table->string('rsp_biller_code', 20)->nullable()->default(null);
            $table->string('rsp_order_no', 30)->default('');
            $table->string('rsp_session_order', 65)->nullable()->default(null);
            $table->datetime('rsp_datetime')->nullable()->default(null);
            $table->string('rsp_status', 15)->nullable()->default(null);
            $table->string('rsp_st_code', 3)->nullable()->default(null);
            $table->string('rsp_rsp_code', 5)->nullable()->default(null);
            $table->string('rsp_bankcode', 20)->nullable()->default(null);
            $table->string('rsp_fpx_id', 30)->nullable()->default(null);
            $table->string('rsp_bank_branch', 100)->nullable()->default(null);
            $table->string('rsp_paymode', 10)->nullable()->default(null);
            $table->string('rsp_dt_authid', 15)->nullable()->default(null);
            $table->string('rsp_ct_authid', 15)->nullable()->default(null);
            $table->integer('rsp_from')->nullable()->default(null);
            $table->integer('trx_settlement_id')->nullable()->default(null);
            $table->string('trx_settlement_st', 1)->default('N');
            $table->string('trx_refdoc', 50)->nullable()->default(null);
            $table->integer('gtw_settlement_id')->nullable()->default(null);
            $table->string('gtw_settlement_st', 1)->nullable()->default(null);
            $table->string('gtw_settlement_doc', 100)->nullable()->default(null);
            $table->string('trx_price_table', 1)->default('B');
            $table->string('istest_trx', 1)->default('N');
            $table->primary('rsp_order_no');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_fpx_payment_ac');
    }
}
