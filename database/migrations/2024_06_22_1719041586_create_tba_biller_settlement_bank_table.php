<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbaBillerSettlementBankTable extends Migration
{
    public function up()
    {
        Schema::create('tba_biller_settlement_bank', function (Blueprint $table) {

		$table->string('biller_bankname',100)->nullable()->default('NULL');
		$table->string('biller_bank_code',20)->nullable()->default('NULL');
		$table->string('biller_bank_account',25);
		$table->text('biller_bank_address')->nullable()->default('NULL');
		$table->string('bank_holder',200)->nullable()->default('NULL');
		$table->string('biller_ref_code',20);
		$table->string('bank_active_status',1)->nullable()->default('NULL');
		$table->primary(['biller_bank_account','biller_ref_code']);

        });
    }

    public function down()
    {
        Schema::dropIfExists('tba_biller_settlement_bank');
    }
}