<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbaAccessControl extends Model
{
    use HasFactory;

    protected $table = 'tba_access_control';
    protected $guarded = ['lognum'];
}
