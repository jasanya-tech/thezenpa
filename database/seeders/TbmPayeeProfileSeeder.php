<?php

namespace Database\Seeders;

use App\Models\TbmPayeeProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmPayeeProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_payee_profile.json'));
        $data = json_decode($json, true);
        TbmPayeeProfile::insert($data['tbm_payee_profile']);
    }
}
