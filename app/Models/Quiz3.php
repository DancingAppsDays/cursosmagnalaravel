<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz3 extends Model
{
    use HasFactory;

    protected $fillable = [
        'idalumno',
        'nombrealumno',
        'a1',
        'a2',
        'a3',
        'a4',
        'a5',
        'score',
       
    ];
}
