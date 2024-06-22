<?php

namespace Database\Seeders;

use App\Models\TbmTopupWithdrawalLedger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmTopupWithdrawalLedgerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_topup_withdrawal_ledger.json'));
        $data = json_decode($json, true);
        TbmTopupWithdrawalLedger::insert($data['tbm_topup_withdrawal_ledger']);
    }
}
