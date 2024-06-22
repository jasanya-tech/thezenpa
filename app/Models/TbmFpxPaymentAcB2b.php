<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmFpxPaymentAcB2b extends Model
{
    use HasFactory;

    protected $table = 'tbm_fpx_payment_ac_b2b';
    protected $guarded = ['rsp_order_no'];
}
