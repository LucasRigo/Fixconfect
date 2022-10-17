<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terceirizado extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'telefone', 'endereco'];
}
