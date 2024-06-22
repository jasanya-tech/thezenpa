<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbaBillerProfile extends Model
{
    use HasFactory;

    protected $table = 'tba_biller_profile';
    protected $guarded = ['biller_code'];
}
