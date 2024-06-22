<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmFpxErrorlist extends Model
{
    use HasFactory;

    protected $table = 'tbm_fpx_errorlist';
    protected $guarded = ['error_code'];
}
