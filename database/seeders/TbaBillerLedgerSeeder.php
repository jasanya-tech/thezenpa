<?php

namespace Database\Seeders;

use App\Models\TbaBillerLedger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbaBillerLedgerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tba_biller_ledger.json'));
        $data = json_decode($json, true);
        TbaBillerLedger::insert($data['tba_biller_ledger']);
    }
}
