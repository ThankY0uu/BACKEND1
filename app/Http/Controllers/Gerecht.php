<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gerecht extends Model
{
    protected $fillable = ['naam', 'omschrijving', 'prijs'];
}
