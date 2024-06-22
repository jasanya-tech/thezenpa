<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmPayeeProfile extends Model
{
    use HasFactory;

    protected $table = 'tbm_payee_profile';
    protected $guarded = ['dokumen_id'];
}
