<?php

namespace Database\Seeders;

use App\Models\Tbv4RequestPwd;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class Tbv4RequestPwdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbv4_request_pwd.json'));
        $data = json_decode($json, true);
        Tbv4RequestPwd::insert($data['tbv4_request_pwd']);
    }
}
