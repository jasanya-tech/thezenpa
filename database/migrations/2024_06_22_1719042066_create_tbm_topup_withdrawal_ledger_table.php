<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmTopupWithdrawalLedgerTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_topup_withdrawal_ledger', function (Blueprint $table) {

            $table->datetime('wt_trxdtime')->nullable()->default(null);
            $table->integer('wt_trxcode')->nullable()->default(null);
            $table->string('wt_memberid', 20)->nullable()->default(null);
            $table->double('wt_amount');
            $table->string('wt_dtct_type', 2)->nullable()->default(null);
            $table->string('wt_refdoc', 50)->nullable()->default(null);
            $table->increments("wt_trxid");
            $table->string('wt_currency', 10)->nullable()->default(null);
            $table->string('wt_biller_code', 30)->nullable()->default(null);
            $table->string('wt_bankacctname', 100)->nullable()->default(null);
            $table->string('wt_bankcode', 15)->nullable()->default(null);
            $table->string('wt_bankacct', 20)->nullable()->default(null);
            $table->string('wt_bankaccholder', 100)->nullable()->default(null);
            $table->string('wt_status', 15)->nullable()->default(null);
            $table->date('wt_settlement_date')->nullable()->default(null);
            $table->string('wt_ttrefdoc', 50)->nullable()->default(null);
            $table->text('wt_remarks')->nullable()->default(null);
            $table->text('wt_backURL')->nullable()->default(null);
            $table->integer('wt_assignment_pcode')->nullable()->default(null);
            $table->date('wt_assignment_stldate')->nullable()->default(null);
            $table->string('wt_assignment_status', 15)->default('PENDING');
            $table->string('wt_assignment_refcode', 50)->nullable()->default(null);
            $table->string('wt_assignment_rcpath', 200)->nullable()->default(null);
            $table->string('wt_payout_callback', 250)->nullable()->default(null);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_topup_withdrawal_ledger');
    }
}
