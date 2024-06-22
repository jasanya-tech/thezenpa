<?php

namespace Database\Seeders;

use App\Models\TbmInititialBalancetodate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmInititialBalancetodateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_inititial_balancetodate.json'));
        $data = json_decode($json, true);
        TbmInititialBalancetodate::insert($data['tbm_inititial_balancetodate']);
    }
}
