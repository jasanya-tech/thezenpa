<?php

namespace Database\Seeders;

use App\Models\TbmFpxTransactionAr;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmFpxTransactionArSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_fpx_transaction_ar.json'));
        $data = json_decode($json, true);
        TbmFpxTransactionAr::insert($data['tbm_fpx_transaction_ar']);
    }
}
