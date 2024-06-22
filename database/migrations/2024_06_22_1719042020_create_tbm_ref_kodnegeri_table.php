<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmRefKodnegeriTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_ref_kodnegeri', function (Blueprint $table) {

		$table->string('kodngr',4)->default('');
		$table->string('nama_negeri',50)->nullable()->default('NULL');
		$table->integer('idx',1);
		$table->primary('kodngr');

        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_ref_kodnegeri');
    }
}