<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmReceiverTrxrequest extends Model
{
    use HasFactory;

    protected $table = 'tbm_receiver_trxrequest';
    protected $guarded = ['trx_reqlog_id'];
}
