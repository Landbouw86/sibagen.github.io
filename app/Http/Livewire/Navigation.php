<?php

namespace App\Http\Livewire;

use App\Models\KgbKategori;
use App\Models\KpnKategori;
use App\Models\SuratKategori;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        $suratkategoris = SuratKategori::orderBy('id', 'desc')->get();
        $kpnkategoris = KpnKategori::all();
        $kgbkategoris = KgbKategori::orderBy('id', 'desc')->get();
        return view(
            'livewire.navigation',
            compact(
                'suratkategoris',
                'kpnkategoris',
                'kgbkategoris'
            )
        );
    }
}
