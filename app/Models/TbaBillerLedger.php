<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbaBillerLedger extends Model
{
    use HasFactory;

    protected $table = 'tba_biller_ledger';
    protected $guarded = ['biller_code'];
}
