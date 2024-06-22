<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmFpxPaymentAcUat extends Model
{
    use HasFactory;

    protected $table = 'tbm_fpx_payment_ac_uat';
    protected $guarded = ['rsp_order_no'];
}
