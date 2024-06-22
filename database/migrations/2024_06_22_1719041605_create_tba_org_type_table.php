<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbaOrgTypeTable extends Migration
{
    public function up()
    {
        Schema::create('tba_org_type', function (Blueprint $table) {
            $table->tinyInteger('type_id');
            $table->string('type_name', 60);
            $table->primary('type_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tba_org_type');
    }
}
