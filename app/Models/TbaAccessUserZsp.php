<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbaAccessUserZsp extends Model
{
    use HasFactory;

    protected $table = 'tba_access_user_zsp';
    protected $guarded = ['userid'];
}
