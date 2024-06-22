<?php

namespace Database\Seeders;

use App\Models\TbmFpxPaymentb2bAcUat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmFpxPaymentb2bAcUatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_fpx_paymentb2b_ac_uat.json'));
        $data = json_decode($json, true);
        TbmFpxPaymentb2bAcUat::insert($data['tbm_fpx_paymentb2b_ac_uat']);
    }
}
