<?php

namespace Database\Seeders;

use App\Models\TbmRefSettlement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmRefSettlementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_ref_settlement.json'));
        $data = json_decode($json, true);
        TbmRefSettlement::insert($data['tbm_ref_settlement']);
    }
}
