<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];

    public function suratkategori()
    {
        return $this->hasMany(SuratKategori::class);
    }

    public function kpnkategori()
    {
        return $this->hasMany(KpnKategori::class);
    }

    public function kgbkategori()
    {
        return $this->hasMany(KgbKategori::class);
    }

    public function surat()
    {
        return $this->hasManyThrough(Surat::class, SuratKategori::class);
    }

    public function kpn()
    {
        return $this->hasManyThrough(Kpn::class, KpnKategori::class);
    }

    public function kgb()
    {
        return $this->hasManyThrough(Kgb::class, KgbKategori::class);
    }
}
