<?php

namespace Database\Seeders;

use App\Models\TbmUserAccessSession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmUserAccessSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_user_access_session.json'));
        $data = json_decode($json, true);
        TbmUserAccessSession::insert($data['tbm_user_access_session']);
    }
}
