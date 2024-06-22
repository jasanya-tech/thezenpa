<?php

namespace Database\Seeders;

use App\Models\TbmRefKodnegeri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmRefKodnegeriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_ref_kodnegeri.json'));
        $data = json_decode($json, true);
        TbmRefKodnegeri::insert($data['tbm_ref_kodnegeri']);
    }
}
