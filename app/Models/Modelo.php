<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;


    protected $fillable = ['referencia'];

    public function cores(){
        return $this->hasMany("App\Models\ModeloCor");
    }

    public function processos(){
        return $this->hasmany("App\Models\ModeloProcesso");
    }

}
