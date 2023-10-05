<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'curso';

    protected $fillable = [
        'sg_curso',
        'nu_seq_categoria',
        'sg_uf',
        'dt_cadastro',
    ]; 
}
