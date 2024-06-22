<?php

namespace Database\Seeders;

use App\Models\TbmReceiverTrxrequest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmReceiverTrxrequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_receiver_trxrequest.json'));
        $data = json_decode($json, true);
        TbmReceiverTrxrequest::insert($data['tbm_receiver_trxrequest']);
    }
}
