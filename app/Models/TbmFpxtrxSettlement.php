<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmFpxtrxSettlement extends Model
{
    use HasFactory;

    protected $table = 'tbm_fpxtrx_settlement';
    protected $guarded = ['trx_ref_id'];
}
