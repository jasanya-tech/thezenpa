<?php

namespace Database\Seeders;

use App\Models\TbmPaymentOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmPaymentOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_payment_order.json'));
        $data = json_decode($json, true);
        TbmPaymentOrder::insert($data['tbm_payment_order']);
    }
}
