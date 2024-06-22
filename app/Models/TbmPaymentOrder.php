<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmPaymentOrder extends Model
{
    use HasFactory;

    protected $table = 'tbm_payment_order';
    protected $guarded = ['refID'];
}
