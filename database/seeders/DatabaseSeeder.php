<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TbaAccessControlSeeder::class,
            TbaAccessUserSeeder::class,
            TbaAccessUserZspSeeder::class,
            TbaAffiliateProfileSeeder::class,
            TbaBillerAffiliateSeeder::class,
            TbaBillerLedgerSeeder::class,
            TbaBillerMasterSeeder::class,
            TbaBillerProfileSeeder::class,
            TbaBillerSettlementBankSeeder::class,
            TbaOrgTypeSeeder::class,
            TbaPayeeProfileSeeder::class,
            TbmBankfinanceSwiftcodeSeeder::class,
            TbmBillerMailSeeder::class,
            TbmFpxAequerySeeder::class,
            TbmFpxErrorlistSeeder::class,
            TbmFpxPaymentAcB2bSeeder::class,
            TbmFpxPaymentb2bAcSeeder::class,
            TbmFpxPaymentAcUatSeeder::class,
            TbmFpxPaymentb2bAcSeeder::class,
            TbmFpxPaymentb2bAcUatSeeder::class,
            TbmFpxTransactionArSeeder::class,
            TbmFpxTransactionArUatSeeder::class,
            TbmFpxtrxSettlementSeeder::class,
            TbmGuestSeeder::class,
            TbmInititialBalancetodateSeeder::class,
            TbmPayeeProfileSeeder::class,
            TbmPaymentOrderSeeder::class,
            TbmPaymentOrderZpsSeeder::class,
            TbmReceiverTrxrequestSeeder::class,
            TbmRefKodnegeriSeeder::class,
            TbmRefSettlementSeeder::class,
            TbmSettleRequestSeeder::class,
            TbmTopupWithdrawalLedgerSeeder::class,
            TbmUserAccessSeeder::class,
            TbmUserAccessSessionSeeder::class,
            Tbv4RequestPwdSeeder::class
        ]);
    }
}
