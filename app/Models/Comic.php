<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    protected $fillable = [
        'titolo',
        'autore',
        'descrizione'
        // Aggiungi qui altri campi se necessario
    ];
    public $timestamps = false;
}
