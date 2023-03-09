<?php

namespace App\Http\Livewire;

use App\Models\Surat;
use App\Models\SuratKategori;
use Livewire\Component;

class SuratCount extends Component
{
    public function render()
    {
        $suratkategori = SuratKategori::orderBy('id', 'desc')->get();
        $surat = Surat::latest()->get();
        return view('livewire.surat-count', compact('suratkategori', 'surat'));
    }
}
