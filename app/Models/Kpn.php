<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kpn extends Model
{
    use HasFactory;

    public function kpnKategori()
    {
        return $this->belongsTo(KpnKategori::class);
    }
}
