<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbaBillerProfileTable extends Migration
{
    public function up()
    {
        Schema::create('tba_biller_profile', function (Blueprint $table) {
            $table->string('biller_test_only', 1)->default('N');
            $table->string('biller_name', 200);
            $table->string('biller_ref_code', 25);
            $table->string('biller_hashkey', 50)->nullable()->default(null);
            $table->integer('biller_master_id')->default('20004');
            $table->string('biller_bankname', 100)->nullable()->default(null);
            $table->string('biller_bank_code', 20)->nullable()->default(null);
            $table->increments("biller_code");
            $table->string('biller_master_code', 5)->default('ZNP');
            $table->string('biller_gateway', 4)->default('ZENP');
            $table->string('biller_order_ref', 3)->nullable()->default(null);
            $table->string('biller_api', 200)->nullable()->default(null);
            $table->string('biller_bnr_header', 200)->nullable()->default(null);
            $table->string('biller_pic', 200)->nullable()->default(null);
            $table->string('biller_addressL1', 100)->nullable()->default(null);
            $table->string('biller_addressL2', 100)->nullable()->default(null);
            $table->string('biller_postcode', 10)->nullable()->default(null);
            $table->string('biller_city', 50)->nullable()->default(null);
            $table->string('biller_statecode', 5)->nullable()->default(null);
            $table->string('biller_phone', 30)->nullable()->default(null);
            $table->string('biller_email', 100)->nullable()->default(null);
            $table->string('biller_active_status', 1)->nullable()->default(null);
            $table->string('biller_note', 200)->nullable()->default(null);
            $table->string('biller_contract_ref', 50)->nullable()->default(null);
            $table->date('biller_reg_date')->nullable()->default(null);
            $table->tinyInteger('biller_portion_type')->nullable()->default(null);
            $table->decimal('biller_portion_amt', 6, 2)->nullable()->default(null);
            $table->string('biller_bank_account', 25)->nullable()->default(null);
            $table->string('biller_access_code', 50)->nullable()->default(null);
            $table->string('biller_contact_name', 100)->nullable()->default(null);
            $table->string('biller_contact_phone', 30)->nullable()->default(null);
            $table->string('biller_contact_email', 100)->nullable()->default(null);
            $table->integer('biller_reg_type')->nullable()->default(null);
            $table->string('biller_reg_id', 30)->nullable()->default(null);
            $table->decimal('biller_mdr', 10, 2)->nullable()->default(null);
            $table->string('biller_approval_st', 10)->default('PENDING');
            $table->string('biller_mdr_cat', 15)->default('PERCENTAGE');
            $table->datetime('biller_approval_date')->nullable()->default(null);
            $table->string('biller_reg_comp', 2)->nullable()->default(null);
            $table->string('biller_aff_id', 20)->nullable()->default(null);
            $table->string('biller_amdr_cat', 15)->nullable()->default(null);
            $table->double('biller_amdr_value')->nullable()->default(null);
            $table->decimal('biller_wtopup_value')->nullable()->default(null);
            $table->string('biller_wtopup_cat', 15)->nullable()->default(null);
            $table->decimal('biller_wclient_value')->nullable()->default(null);
            $table->string('biller_wclient_cat', 15)->nullable()->default(null);
            $table->string('biller_settlement_cat', 15)->nullable()->default(null);
            $table->double('biller_settlement_value')->nullable()->default(null);
            $table->double('biller_pay_min')->nullable()->default(null);
            $table->double('biller_pay_max')->default('30000.00');
            $table->tinyInteger('biller_status')->default('1');
            $table->string('biller_introducer', 20)->nullable()->default(null);
            $table->string('biller_affdoc_path', 200)->nullable()->default(null);
            $table->double('biller_floor_amt')->default('1.40');
            $table->double('biller_lowest_notify')->default('0.00');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tba_biller_profile');
    }
}
