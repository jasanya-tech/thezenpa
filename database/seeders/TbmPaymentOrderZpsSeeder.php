<?php

namespace Database\Seeders;

use App\Models\TbmPaymentOrderZps;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmPaymentOrderZpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_payment_order_zps.json'));
        $data = json_decode($json, true);
        TbmPaymentOrderZps::insert($data['tbm_payment_order_zps']);
    }
}
