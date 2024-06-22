<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmFpxTransactionAr extends Model
{
    use HasFactory;

    protected $table = 'tbm_fpx_transaction_ar';
    protected $guarded = ['trx_id'];
}
