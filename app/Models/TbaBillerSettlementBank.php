<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbaBillerSettlementBank extends Model
{
    use HasFactory;

    protected $table = 'tba_biller_settlement_bank';
    protected $guarded = ['biller_bank_account'];
}
