<?php

namespace Database\Seeders;

use App\Models\TbmFpxPaymentAcUat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmFpxPaymentAcUatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_fpx_payment_ac_uat.json'));
        $data = json_decode($json, true);
        TbmFpxPaymentAcUat::insert($data['tbm_fpx_payment_ac_uat']);
    }
}
