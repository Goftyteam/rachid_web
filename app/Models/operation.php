<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class operation extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_bat',
        'nomMarche',
        'numMarche',
        'lo',
        'DS',
        'DO',
        'md',
        'mr',
        'DD',
        'ntj',
        'mtva',
        'mtrp-ttc',
    ];
}
