<?php

namespace App\Http\Livewire;

use App\Models\Kgb;
use App\Models\KgbKategori;
use Livewire\Component;

class KgbCount extends Component
{
    public function render()
    {
        $kgbkategori = KgbKategori::orderBy('id', 'desc')->get();
        $kgb = Kgb::latest()->get();
        return view('livewire.kgb-count', compact('kgbkategori', 'kgb'));
    }
}
