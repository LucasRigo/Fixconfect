<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeloProcesso extends Model
{
    use HasFactory;

    protected $fillable = ['modelo_id', 'processo_id'];


    public function processo() {
        return $this->belongsTo("App\Models\Processo");
    }
}
