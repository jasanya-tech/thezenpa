<?php

namespace Database\Seeders;

use App\Models\TbmFpxTransactionArUat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmFpxTransactionArUatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_fpx_transaction_ar_uat.json'));
        $data = json_decode($json, true);
        TbmFpxTransactionArUat::insert($data['tbm_fpx_transaction_ar_uat']);
    }
}
