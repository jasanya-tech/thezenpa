<?php

namespace Database\Seeders;

use App\Models\TbmFpxPaymentAcB2b;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmFpxPaymentAcB2bSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_fpx_payment_ac_b2b.json'));
        $data = json_decode($json, true);
        TbmFpxPaymentAcB2b::insert($data['tbm_fpx_payment_ac_b2b']);
    }
}
