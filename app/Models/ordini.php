<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordini extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'cliente',
        'articolo',
        'famiglia',
        'materiaPrima',
        'tipoCarta',
        'qualitàCarta',
        'altezzaBobinaMadre',
        'grammatura',
        'numeroVeli',
        'allungamento',
        'pesoBobinaMadre',
        'articoloProdotto',
        'numeroRotoliPerLog',
        'altezzaRotolo',
        'numeroMetriRotolo',
        'lunghezzaStrappo',
        'numeroStrappi',
        'tipoAnima',
        'pesoAnimaKg',
        'goffrato',
        'nostroCodiceArticolo',
        'incollato',
        'godronato',
        'diametroRotolo',
        'pesoRotoloNetto',
        'pesoRotoloAnima',
        'numeroRotoliCollo',
        'pesoFilmImballo',
        'totalePesoColloKg',
        //imballo
        'filmConfezionatrice',
        'etichettaConfezionatrice',
        'maniglia',
        'filmFardellatore',
        'etichettaFardellatore',
        'tipoEtichetta',
        'codiceEtichetta',
        'codiceABarre',
        //pancale
        'tipoPancale',
        'resaPancale',
        'numeroColliPerStrato',
        'numeroStratiPerPancale',
        'TotaleColliPancale',
        'mettiTop',
        //produzioni e varie
        'pesoAnima',
        'pesoSteccataKg',
        'note',
        'numeroPancaliDaProdurre',
    ];
}
