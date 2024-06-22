<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbaAffiliateProfileTable extends Migration
{
    public function up()
    {
        Schema::create('tba_affiliate_profile', function (Blueprint $table) {
            $table->increments('aff_refid'); // Auto-incrementing primary key
            $table->string('aff_name', 200);
            $table->string('aff_phone', 30)->nullable();
            $table->string('aff_email', 100)->nullable();
            $table->string('aff_active_status', 1)->nullable();
            $table->string('aff_note', 200)->nullable();
            $table->string('aff_member_id', 25)->nullable();
            $table->date('aff_reg_date')->nullable();
            $table->tinyInteger('aff_portion_type')->nullable(); // Changed from integer with size to tinyInteger
            $table->decimal('aff_portion_amt', 6, 2)->nullable();
            $table->string('aff_bankname', 100)->nullable();
            $table->string('aff_bank_code', 20)->nullable();
            $table->string('aff_bank_account', 25)->nullable();
            $table->string('aff_mdr_cat', 15)->default('PERCENTAGE');
            $table->datetime('aff_approval_date')->nullable();
            $table->string('aff_doc_path', 100)->nullable();
            $table->string('aff_temp_uid', 20)->nullable();
            $table->string('aff_temp_pwd', 50)->nullable();
            $table->string('aff_doc_id', 25)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tba_affiliate_profile');
    }
}
