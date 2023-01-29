<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotspot extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'id',
        'LocationName',
        'LocationState',
        'LocationKod',
        'LocationAdd',
        'latitude',
        'longitude',
        'detail'
    ];
}
