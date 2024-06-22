<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmRefSettlementTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_ref_settlement', function (Blueprint $table) {

            $table->string('trx_settle_status', 1)->nullable()->default('NULL');
            $table->date('trx_settle_date')->nullable()->default('NULL');
            $table->increments("trx_settle_refid");
            $table->string('trx_settle_refdoc', 45)->nullable()->default('NULL');
            $table->string('trx_biller_code', 20)->nullable()->default('NULL');
            $table->primary('trx_settle_refid');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_ref_settlement');
    }
}
