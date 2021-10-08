<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manutenzioni extends Model
{
    use HasFactory;
    protected $table = 'registromanutenzioni';
    protected $fillable = [
        'idManutenzione',
        'data',
        'esecutore',
        'descrizioneManutenzione',
        'note',
    ];
}
