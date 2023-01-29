<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donate extends Model
{
    use HasFactory;
    protected $fillable = ['id',
    'LocalsID',
    'donationItem',
    'donationType',
    'donationState',
    'donationAdd',
    'donationBal', 
    'donationNum',
    'donationDesc',
    'donationPhone',
    'donationZon',
    'donationKod', 
    'latitude', 
    'longitude'];
}
