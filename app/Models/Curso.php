<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = [
        'idalumno',
        'nombrealumno',
        'currentcurso',
        //'currenttime',
        'time1',
        'time2',
        'time3',
        'time4',
        'time5',
        'time6',
        'time7',
        'time8',
        'time9', //TODO 'time10 y 11',
        'time10',
        'time11',
    ];
}
