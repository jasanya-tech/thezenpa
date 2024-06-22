<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmFpxAequeryTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_fpx_aequery', function (Blueprint $table) {
            $table->string('fpx_msgType', 2)->nullable()->default(null);
            $table->string('fpx_msgToken', 2)->nullable()->default(null);
            $table->string('fpx_sellerExId', 20);
            $table->string('fpx_sellerExOrderNo', 40)->nullable()->default(null);
            $table->string('fpx_sellerTxnTime', 30)->nullable()->default(null);
            $table->string('fpx_sellerOrderNo', 40);
            $table->string('fpx_sellerId', 40)->nullable()->default(null);
            $table->string('fpx_sellerBankCode', 40)->nullable()->default(null);
            $table->string('fpx_txnCurrency', 20)->nullable()->default(null);
            $table->string('fpx_txnAmount', 20)->nullable()->default(null);
            $table->string('fpx_buyerEmail', 100)->nullable()->default(null);
            $table->text('fpx_checkSum')->nullable()->default(null);
            $table->string('fpx_buyerName', 100)->nullable()->default(null);
            $table->string('fpx_buyerBankId', 30)->nullable()->default(null);
            $table->string('fpx_buyerBankBranch', 100)->nullable()->default(null);
            $table->string('fpx_buyerAccNo', 20)->nullable()->default(null);
            $table->string('fpx_buyerId', 20)->nullable()->default(null);
            $table->string('fpx_makerName', 100)->nullable()->default(null);
            $table->string('fpx_buyerIban', 100)->nullable()->default(null);
            $table->string('fpx_version', 20)->nullable()->default(null);
            $table->string('fpx_productDesc', 100)->nullable()->default(null);
            $table->primary('fpx_sellerOrderNo');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_fpx_aequery');
    }
}
