<?php

namespace Database\Seeders;

use App\Models\TbmFpxErrorlist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmFpxErrorlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_fpx_errorlist.json'));
        $data = json_decode($json, true);
        TbmFpxErrorlist::insert($data['tbm_fpx_errorlist']);
    }
}
