<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Productos extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'productos';
    protected $fillable = [
        'codprod',
        'nombreprod',
        'typprod',
        'costunit',
        'cantexist'
    ];
}
