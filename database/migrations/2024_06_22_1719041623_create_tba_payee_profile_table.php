<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbaPayeeProfileTable extends Migration
{
    public function up()
    {
        Schema::create('tba_payee_profile', function (Blueprint $table) {

            $table->increments("payee_code");
            $table->string('payee_name', 200);
            $table->string('payee_addressL1', 200)->nullable()->default(null);
            $table->string('payee_addressL2', 100)->nullable()->default(null);
            $table->string('payee_postcode', 10)->nullable()->default(null);
            $table->string('payee_city', 50)->nullable()->default(null);
            $table->string('payee_statecode', 5)->nullable()->default(null);
            $table->string('payee_phone', 30)->nullable()->default(null);
            $table->string('payee_email', 100)->nullable()->default(null);
            $table->string('payee_active_status', 1)->nullable()->default(null);
            $table->string('payee_note', 200)->nullable()->default(null);
            $table->string('payee_ref_code', 25)->nullable()->default(null);
            $table->string('payee_contract_ref', 50)->nullable()->default(null);
            $table->date('payee_reg_date')->nullable()->default(null);
            $table->string('payee_portion_type', 15)->nullable()->default(null);
            $table->decimal('payee_portion_amt', 6, 2)->nullable()->default(null);
            $table->string('payee_bankname', 100)->nullable()->default(null);
            $table->string('payee_bank_code', 20)->nullable()->default(null);
            $table->string('payee_bank_account', 25)->nullable()->default(null);
            $table->string('payee_loa_path', 200)->nullable()->default(null);
            $table->string('payee_approval_st', 10)->default('PENDING');
            $table->integer('payee_memberid')->nullable()->default(null);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tba_payee_profile');
    }
}
