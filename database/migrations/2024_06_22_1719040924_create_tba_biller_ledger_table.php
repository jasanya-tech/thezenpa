<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbaBillerLedgerTable extends Migration
{
    public function up()
    {
        Schema::create('tba_biller_ledger', function (Blueprint $table) {

            $table->integer('biller_code', 11);
            $table->string('biller_seller', 29);
            $table->date('biller_date');;
            $table->string('biller_trx_type', 2)->nullable()->default(null);
            $table->string('biller_trx_desc', 100)->nullable()->default(null);
            $table->string('biller_trx_ref', 25)->nullable()->default(null);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tba_biller_ledger');
    }
}
