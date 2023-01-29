<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class support extends Model
{
    use HasFactory;
    protected $fillable = ['id',
    'LocalsID',
    'supportName',
    'supportIC',
    'supportDesc',
    'supportType',
    'supportState',
    'supportKod',
    'supportZon',
    'supportAdd', 
    'supportPhone', 
    'supportKod', 
    'supportZon',
    'supportQuantity'

];
}
