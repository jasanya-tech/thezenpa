<?php

namespace Database\Seeders;

use App\Models\TbmFpxtrxSettlement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmFpxtrxSettlementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_fpxtrx_settlement.json'));
        $data = json_decode($json, true);
        TbmFpxtrxSettlement::insert($data['tbm_fpxtrx_settlement']);
    }
}
