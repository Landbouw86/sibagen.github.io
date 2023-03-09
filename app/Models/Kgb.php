<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kgb extends Model
{
    use HasFactory;

    public function kgbKategori()
    {
        return $this->belongsTo(KgbKategori::class);
    }
}
