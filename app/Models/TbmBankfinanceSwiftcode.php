<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmBankfinanceSwiftcode extends Model
{
    use HasFactory;

    protected $table = 'tbm_bankfinance_swiftcode';
    protected $guarded = ['swiftcode'];
}
