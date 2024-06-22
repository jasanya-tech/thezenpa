<?php

namespace Database\Seeders;

use App\Models\TbmUserAccess;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmUserAccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_user_access.json'));
        $data = json_decode($json, true);
        TbmUserAccess::insert($data['tbm_user_access']);
    }
}
