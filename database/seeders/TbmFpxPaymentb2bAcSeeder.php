<?php

namespace Database\Seeders;

use App\Models\TbmFpxPaymentb2bAc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmFpxPaymentb2bAcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_fpx_paymentb2b_ac.json'));
        $data = json_decode($json, true);
        TbmFpxPaymentb2bAc::insert($data['tbm_fpx_paymentb2b_ac']);
    }
}
