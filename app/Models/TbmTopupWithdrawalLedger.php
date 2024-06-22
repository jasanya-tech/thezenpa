<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmTopupWithdrawalLedger extends Model
{
    use HasFactory;

    protected $table = 'tbm_topup_withdrawal_ledger';
    protected $guarded = ['wt_trxid'];
}
