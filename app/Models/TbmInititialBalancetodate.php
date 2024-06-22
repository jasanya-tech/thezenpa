<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmInititialBalancetodate extends Model
{
    use HasFactory;

    protected $table = 'tbm_inititial_balancetodate';
    protected $guarded = ['initb_log'];
}
