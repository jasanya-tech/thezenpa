<?php

namespace Database\Seeders;

use App\Models\TbaAccessControl;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbaAccessControlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tba_access_control.json'));
        $data = json_decode($json, true);
        TbaAccessControl::insert($data['tba_access_control']);
    }
}
