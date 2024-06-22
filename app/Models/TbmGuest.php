<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmGuest extends Model
{
    use HasFactory;

    protected $table = 'tbm_guest';
    protected $guarded = ['guest_id'];
}
