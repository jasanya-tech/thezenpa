<?php

namespace Database\Seeders;

use App\Models\TbaAccessUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbaAccessUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tba_access_user.json'));
        $data = json_decode($json, true);
        TbaAccessUser::insert($data['tba_access_user']);
    }
}
