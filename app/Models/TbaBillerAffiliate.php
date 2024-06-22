<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbaBillerAffiliate extends Model
{
    use HasFactory;

    protected $table = 'tba_biller_affiliate';
    protected $guarded = ['biller_code'];
}
