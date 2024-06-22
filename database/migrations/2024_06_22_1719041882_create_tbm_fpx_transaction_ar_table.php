<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmFpxTransactionArTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_fpx_transaction_ar', function (Blueprint $table) {

            $table->string('trx_exchangeid', 20);
            $table->string('trx_sellerid', 20);
            $table->increments("trx_id");
            $table->string('trx_payer_ref', 25);
            $table->string('trx_order_no', 30)->nullable()->default(null);
            $table->datetime('trx_datetime')->nullable()->default(null);
            $table->string('trx_payer_id', 15)->nullable()->default(null);
            $table->string('trx_mode', 10)->default('FPXB2C');
            $table->string('trx_bankid', 15)->nullable()->default(null);
            $table->string('trx_app_id', 20)->nullable()->default(null);
            $table->string('trx_email', 65)->nullable()->default(null);
            $table->string('trx_return_url', 200)->nullable()->default(null);
            $table->string('trx_biller_id', 30)->nullable()->default(null);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_fpx_transaction_ar');
    }
}
