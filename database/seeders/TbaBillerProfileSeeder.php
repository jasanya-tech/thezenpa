<?php

namespace Database\Seeders;

use App\Models\TbaBillerProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbaBillerProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tba_biller_profile.json'));
        $data = json_decode($json, true);
        TbaBillerProfile::insert($data['tba_biller_profile']);
    }
}
