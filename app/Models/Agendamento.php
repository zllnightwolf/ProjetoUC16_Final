<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'tipo',
        'data',
        'horario',
    ];
}
