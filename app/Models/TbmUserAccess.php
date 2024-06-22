<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmUserAccess extends Model
{
    use HasFactory;

    protected $table = 'tbm_user_access';
    protected $guarded = ['userid'];
}
