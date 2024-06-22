<?php

namespace Database\Seeders;

use App\Models\TbaPayeeProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbaPayeeProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tba_payee_profile.json'));
        $data = json_decode($json, true);
        TbaPayeeProfile::insert($data['tba_payee_profile']);
    }
}
