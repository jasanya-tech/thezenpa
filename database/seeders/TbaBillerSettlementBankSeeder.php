<?php

namespace Database\Seeders;

use App\Models\TbaBillerSettlementBank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbaBillerSettlementBankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tba_biller_settlement_bank.json'));
        $data = json_decode($json, true);
        TbaBillerSettlementBank::insert($data['tba_biller_settlement_bank']);
    }
}
