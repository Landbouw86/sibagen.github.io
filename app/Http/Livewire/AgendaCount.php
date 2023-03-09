<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Kgb;
use App\Models\Kpn;
use App\Models\Surat;
use Livewire\Component;

class AgendaCount extends Component
{
    public function render()
    {
        $categories = Category::with('suratKategori', 'kpnKategori', 'kgbkategori')->orderBy('id', 'desc')->get();
        $surat = Surat::latest()->get();
        $kpn = Kpn::latest()->get();
        $kgb = Kgb::latest()->get();
        return view('livewire.agenda-count', compact('categories', 'surat', 'kpn', 'kgb'));
    }
}
