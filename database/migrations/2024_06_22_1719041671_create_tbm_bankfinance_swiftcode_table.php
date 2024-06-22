<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmBankfinanceSwiftcodeTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_bankfinance_swiftcode', function (Blueprint $table) {

            $table->string('bank_finance', 100)->nullable()->default(null);
            $table->string('city', 100)->nullable()->default(null);
            $table->string('branch', 100)->nullable()->default(null);
            $table->string('swiftcode', 15);
            $table->primary('swiftcode');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_bankfinance_swiftcode');
    }
}
