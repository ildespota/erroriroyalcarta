<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class errori extends Model
{
    use HasFactory;

    protected $table = 'erroris';

    protected $fillable = [
        'codicemacchina',
        'causaerrore',
        'possibilirisoluzioni',
        'risolto',
        'immagine'
    ];
}
