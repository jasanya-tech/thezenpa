<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmFpxTransactionArUat extends Model
{
    use HasFactory;

    protected $table = 'tbm_fpx_transaction_ar_uat';
    protected $guarded = ['trx_id'];
}
