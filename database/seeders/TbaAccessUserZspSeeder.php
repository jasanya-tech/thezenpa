<?php

namespace Database\Seeders;

use App\Models\TbaAccessUserZsp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;


class TbaAccessUserZspSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tba_access_user_zsp.json'));
        $data = json_decode($json, true);
        TbaAccessUserZsp::insert($data['tba_access_user_zsp']);
    }
}
