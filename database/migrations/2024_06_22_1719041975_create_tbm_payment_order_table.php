<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmPaymentOrderTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_payment_order', function (Blueprint $table) {

            $table->string('sellerID', 15);
            $table->string('orderID', 50);
            $table->string('biller_code', 15)->nullable()->default('NULL');
            $table->string('email', 65)->nullable()->default('NULL');
            $table->increments("refID");
            $table->string('aplnID', 15)->nullable()->default('NULL');
            $table->string('bankID', 15)->nullable()->default('NULL');
            $table->string('payrefID', 32)->nullable()->default('NULL');
            $table->datetime('reqdate')->nullable()->default('NULL');
            $table->string('returnURL', 250)->nullable()->default('NULL');
            $table->string('callbackURL', 250)->nullable()->default('NULL');
            $table->string('declineURL', 250)->nullable()->default('NULL');
            $table->string('rsp_rcode', 15)->nullable()->default('NULL');
            $table->string('rsp_bankid', 15)->nullable()->default('NULL');
            $table->string('rsp_status', 20)->nullable()->default('NULL');
            $table->string('rsp_fpxid', 30)->nullable()->default('NULL');
            $table->string('rsp_authid', 10)->nullable()->default('NULL');
            $table->text('rsp_datastring')->nullable()->default('NULL');
            $table->string('rsp_fpxtime', 30)->nullable()->default('NULL');
            $table->integer('rsp_from', 1)->nullable()->default('NULL');
            $table->string('rsp_bankname', 75)->nullable()->default('NULL');
            $table->primary('refID');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_payment_order');
    }
}
