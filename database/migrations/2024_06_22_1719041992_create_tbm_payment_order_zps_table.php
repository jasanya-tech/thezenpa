<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmPaymentOrderZpsTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_payment_order_zps', function (Blueprint $table) {

            $table->string('sellerID', 15);
            $table->string('biller_code', 15);
            $table->string('aplnID', 15);
            $table->string('payrefID', 32);
            $table->string('orderID', 50)->nullable()->default(null);
            $table->datetime('reqdate')->nullable()->default(null);
            $table->primary('payrefID');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_payment_order_zps');
    }
}
