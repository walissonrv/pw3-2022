<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable =[
        'nome'
]; // toda coluna criada nas tabelas deve ser colocada dentro de fillable


}
