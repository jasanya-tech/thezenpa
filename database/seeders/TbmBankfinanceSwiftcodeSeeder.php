<?php

namespace Database\Seeders;

use App\Models\TbmBankfinanceSwiftcode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TbmBankfinanceSwiftcodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/tbm_bankfinance_swiftcode.json'));
        $data = json_decode($json, true);
        TbmBankfinanceSwiftcode::insert($data['tbm_bankfinance_swiftcode']);
    }
}
