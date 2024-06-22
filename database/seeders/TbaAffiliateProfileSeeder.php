<?php

namespace Database\Seeders;

use App\Models\TbaAffiliateProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbaAffiliateProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tba_affiliate_profile.json'));
        $data = json_decode($json, true);
        TbaAffiliateProfile::insert($data['tba_affiliate_profile']);
    }
}
