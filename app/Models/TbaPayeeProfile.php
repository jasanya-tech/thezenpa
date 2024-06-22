<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbaPayeeProfile extends Model
{
    use HasFactory;

    protected $table = 'tba_payee_profile';
    protected $guarded = ['payee_code'];
}
