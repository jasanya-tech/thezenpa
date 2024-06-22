<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmFpxPaymentAc extends Model
{
    use HasFactory;

    protected $table = 'tbm_fpx_payment_ac';
    protected $guarded = ['rsp_order_no'];
}
