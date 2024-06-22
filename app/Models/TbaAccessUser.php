<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbaAccessUser extends Model
{
    use HasFactory;

    protected $table = 'tba_access_user';
    protected $guarded = ['userid'];
}
