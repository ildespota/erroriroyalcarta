<?php

namespace App\Models;

use app\Models\errori;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class errori_images extends Model
{

    use HasFactory;

    protected $fillable = [
        'src'

    ];

    public function errori_images()
    {
        return $this->belongsTo(errori::class);
    }
}
