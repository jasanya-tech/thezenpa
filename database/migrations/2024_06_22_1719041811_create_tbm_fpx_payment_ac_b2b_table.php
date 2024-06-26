<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmFpxPaymentAcB2bTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_fpx_payment_ac_b2b', function (Blueprint $table) {

            $table->string('rsp_exchangeid', 20);
            $table->string('rsp_sellerid', 20);
            $table->string('rsp_order_no', 30)->default('');
            $table->string('rsp_session_order', 65)->nullable()->default(null);
            $table->datetime('rsp_datetime')->nullable()->default(null);
            $table->double("rsp_amt")->nullable()->default(null);
            $table->string('rsp_status', 15)->nullable()->default(null);
            $table->string('rsp_st_code', 3);
            $table->string('rsp_rsp_code', 5)->nullable()->default(null);
            $table->string('rsp_bankcode', 20)->nullable()->default(null);
            $table->string('rsp_fpx_id', 30)->nullable()->default(null);
            $table->string('rsp_bank_branch', 100)->nullable()->default(null);
            $table->string('rsp_paymode', 10)->nullable()->default(null);
            $table->string('rsp_dt_authid', 15)->nullable()->default(null);
            $table->string('rsp_ct_authid', 15)->nullable()->default(null);
            $table->integer('rsp_from')->nullable()->default(null);
            $table->primary(['rsp_order_no', 'rsp_st_code']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_fpx_payment_ac_b2b');
    }
}
