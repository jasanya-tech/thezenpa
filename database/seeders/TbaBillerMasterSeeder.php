<?php

namespace Database\Seeders;

use App\Models\TbaBillerMaster;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbaBillerMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tba_biller_master.json'));
        $data = json_decode($json, true);
        TbaBillerMaster::insert($data['tba_biller_master']);
    }
}
