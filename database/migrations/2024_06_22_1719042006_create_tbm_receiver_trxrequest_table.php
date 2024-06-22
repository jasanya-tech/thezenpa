<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmReceiverTrxrequestTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_receiver_trxrequest', function (Blueprint $table) {
            $table->string('trx_req_status', 15)->nullable()->default('NULL');
            $table->datetime('trx_req_date')->nullable()->default('NULL');
            $table->increments("trx_reqlog_id");
            $table->integer('trx_reqid', 11);
            $table->string('trx_biller', 20)->nullable()->default('NULL');
            $table->string('trx_remarks', 1000)->nullable()->default('NULL');
            $table->integer('trx_assignee_code', 11)->default('99');
            $table->date('trx_assignee_stldate')->nullable()->default('NULL');
            $table->string('trx_assignee_rcpath', 200)->nullable()->default('NULL');
            $table->string('trx_assignee_refdoc', 100)->nullable()->default('NULL');
            $table->string('trx_assignment_status', 15)->default('PENDING');
            $table->string('trx_assignee_note', 200)->nullable()->default('NULL');
            $table->primary('trx_reqlog_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_receiver_trxrequest');
    }
}
