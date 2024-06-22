<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmPayeeProfileTable extends Migration
{
    public function up()
    {
        Schema::create('tbm_payee_profile', function (Blueprint $table) {
            $table->string('nama_pembayar', 100)->nullable()->default(null);
            $table->string('dokumen_id', 30)->default('');
            $table->string('jenis_dokumen', 1)->default('1');
            $table->string('warganegara', 45)->default('MALAYSIA');
            $table->string('alamatL1', 80)->nullable()->default(null);
            $table->string('alamatL2', 80)->nullable()->default(null);
            $table->string('alamatL3', 80)->nullable()->default(null);
            $table->string('poskod', 10)->nullable()->default(null);
            $table->string('bandar', 50)->nullable()->default(null);
            $table->string('negeri', 4)->nullable()->default(null);
            $table->string('notel', 45)->nullable()->default(null);
            $table->string('email', 60)->nullable()->default(null);
            $table->string('userid', 15)->nullable()->default(null);
            $table->string('notelhp', 45)->nullable()->default(null);
            $table->string('userpwd', 42)->nullable()->default(null);
            $table->string('sektor', 15)->nullable()->default(null);
            $table->string('agama', 1)->nullable()->default(null);
            $table->string('bangsa', 1)->nullable()->default(null);
            $table->string('jantina', 1)->nullable()->default(null);
            $table->string('phormat', 15)->nullable()->default(null);
            $table->string('TRKDAFTAR', 30)->nullable()->default(null);
            $table->integer('ktg_pembayar')->default('1');
            $table->primary('dokumen_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbm_payee_profile');
    }
}
