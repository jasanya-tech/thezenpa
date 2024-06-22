<?php

namespace Database\Seeders;

use App\Models\TbmFpxAequery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmFpxAequerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_fpx_aequery.json'));
        $data = json_decode($json, true);
        TbmFpxAequery::insert($data['tbm_fpx_aequery']);
    }
}
