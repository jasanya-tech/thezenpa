<?php

namespace Database\Seeders;

use App\Models\TbaOrgType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbaOrgTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tba_org_type.json'));
        $data = json_decode($json, true);
        TbaOrgType::insert($data['tba_org_type']);
    }
}
