<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmRefSettlement extends Model
{
    use HasFactory;

    protected $table = 'tbm_ref_settlement';
    protected $guarded = ['trx_settle_refid'];
}
