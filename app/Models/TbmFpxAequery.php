<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmFpxAequery extends Model
{
    use HasFactory;

    protected $table = 'tbm_fpx_aequery';
    protected $guarded = ['fpx_sellerOrderNo'];
}
