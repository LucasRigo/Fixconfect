<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeloCor extends Model
{
    use HasFactory;

    protected $fillable = ['modelo_id', 'cor_id'];

    public function cor() {
        return $this->belongsTo("App\Models\Cor");
    }
}
