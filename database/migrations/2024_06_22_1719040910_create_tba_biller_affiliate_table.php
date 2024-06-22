<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbaBillerAffiliateTable extends Migration
{
    public function up()
    {
        Schema::create('tba_biller_affiliate', function (Blueprint $table) {

		$table->integer('biller_code',11);
		$table->string('affiliate_id',30)->nullable()->default('NULL');

        });
    }

    public function down()
    {
        Schema::dropIfExists('tba_biller_affiliate');
    }
}