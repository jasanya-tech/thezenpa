<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbaAffiliateProfile extends Model
{
    use HasFactory;

    protected $table = 'tba_affiliate_profile';
    protected $guarded = ['aff_refid'];
}
