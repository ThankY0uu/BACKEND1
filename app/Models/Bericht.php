<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bericht extends Model
{
    protected $table = 'berichten';
    protected $fillable = ['naam', 'email', 'bericht'];
}
