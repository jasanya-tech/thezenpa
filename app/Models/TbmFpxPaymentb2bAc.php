<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmFpxPaymentb2bAc extends Model
{
    use HasFactory;

    protected $table = 'tbm_fpx_paymentb2b_ac';
    protected $guarded = ['rsp_order_no'];
}
