<?php

namespace Database\Seeders;

use App\Models\TbaBillerAffiliate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbaBillerAffiliateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tba_biller_affiliate.json'));
        $data = json_decode($json, true);
        TbaBillerAffiliate::insert($data['tba_biller_affiliate']);
    }
}
