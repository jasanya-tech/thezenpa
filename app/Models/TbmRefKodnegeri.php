<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmRefKodnegeri extends Model
{
    use HasFactory;

    protected $table = 'tbm_ref_kodnegeri';
    protected $guarded = ['kodngr'];
}
