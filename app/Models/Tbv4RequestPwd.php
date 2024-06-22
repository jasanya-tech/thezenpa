<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbv4RequestPwd extends Model
{
    use HasFactory;

    protected $table = 'tbv4_request_pwd';
    protected $guarded = ['logid'];
}
