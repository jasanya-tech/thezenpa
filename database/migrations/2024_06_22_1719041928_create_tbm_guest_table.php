<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmGuestTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_guest', function (Blueprint $table) {

            $table->increments("guest_id");
            $table->string('guest_name', 100)->nullable()->default('NULL');
            $table->string('guest_email', 100)->nullable()->default('NULL');
            $table->string('guest_phone', 30)->nullable()->default('NULL');
            $table->string('guest_addr1', 80)->nullable()->default('NULL');
            $table->string('guest_addr2', 80)->nullable()->default('NULL');
            $table->string('guest_catg', 2)->nullable()->default('NULL');
            $table->string('guest_ref_id', 30)->nullable()->default('NULL');
            $table->string('guest_userid', 15)->nullable()->default('NULL');
            $table->string('guest_userpwd', 40)->nullable()->default('NULL');
            $table->string('guest_city', 40)->nullable()->default('NULL');
            $table->string('guest_postcode', 6)->nullable()->default('NULL');
            $table->string('guest_stcode', 3)->nullable()->default('NULL');
            $table->string('guest_idcard', 20)->nullable()->default('NULL');
            $table->string('guest_cat', 1)->nullable()->default('NULL');
            $table->primary('guest_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_guest');
    }
}
