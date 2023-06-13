<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lectura extends Model
{
    protected $primaryKey = 'idLibro';
    protected $fillable = ['idLibro', 'idUsuario', 'nombreLibro', 'autorLibro', 'generoLibro'];
    use HasFactory;
}
