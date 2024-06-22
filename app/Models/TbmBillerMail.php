<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmBillerMail extends Model
{
    use HasFactory;

    protected $table = 'tbm_biller_mail';
    protected $guarded = ['logmail'];
}
