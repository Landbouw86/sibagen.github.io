<?php

namespace App\Http\Livewire;

use App\Models\Kpn;
use App\Models\KpnKategori;
use Livewire\Component;

class KpnCount extends Component
{
    public function render()
    {
        $kpnkategori = KpnKategori::orderBy('id', 'desc')->get();
        $kpn = Kpn::latest()->get();
        return view('livewire.kpn-count', compact('kpnkategori', 'kpn'));
    }
}
