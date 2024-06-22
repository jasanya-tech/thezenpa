<?php

namespace Database\Seeders;

use App\Models\TbmBillerMail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmBillerMailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_biller_mail.json'));
        $data = json_decode($json, true);
        TbmBillerMail::insert($data['tbm_biller_mail']);
    }
}
