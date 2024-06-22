<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmRefSettlementTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_ref_settlement', function (Blueprint $table) {

            $table->string('trx_settle_status', 1)->nullable()->default(null);
            $table->date('trx_settle_date')->nullable()->default(null);
            $table->increments("trx_settle_refid");
            $table->string('trx_settle_refdoc', 45)->nullable()->default(null);
            $table->string('trx_biller_code', 20)->nullable()->default(null);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_ref_settlement');
    }
}
