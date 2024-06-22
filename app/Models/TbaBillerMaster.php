<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbaBillerMaster extends Model
{
    use HasFactory;

    protected $table = 'tba_biller_master';
    protected $guarded = ['biller_id'];
}
