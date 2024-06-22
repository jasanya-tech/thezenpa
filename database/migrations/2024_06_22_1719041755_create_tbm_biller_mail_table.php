<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmBillerMailTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_biller_mail', function (Blueprint $table) {

            $table->string('biller_code', 20);
            $table->text('mailcontent')->nullable()->default('NULL');
            $table->increments("logmail");
            $table->primary('logmail');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_biller_mail');
    }
}
