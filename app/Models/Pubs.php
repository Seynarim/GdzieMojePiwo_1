<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pubs extends Model
{
    use HasFactory;
    protected $fillable = 

    [
    'name',
    'adress',
    'adress_url',
    'image url',
    'gmaps_url'
    ];
}
