<?php

namespace Database\Seeders;

use App\Models\TbmFpxPaymentAc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmFpxPaymentAcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_fpx_payment_ac.json'));
        $data = json_decode($json, true);
        TbmFpxPaymentAc::insert($data['tbm_fpx_payment_ac']);
    }
}
