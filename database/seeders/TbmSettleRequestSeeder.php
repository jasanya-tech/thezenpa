<?php

namespace Database\Seeders;

use App\Models\TbmSettleRequest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmSettleRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_settle_request.json'));
        $data = json_decode($json, true);
        TbmSettleRequest::insert($data['tbm_settle_request']);
    }
}
