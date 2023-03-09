<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\KgbKategori;
use App\Models\KpnKategori;
use App\Models\SuratKategori;
use Livewire\Component;

class FormKategori extends Component
{
    public function render()
    {
        $categories = Category::all();
        $suratkategoris = SuratKategori::all();
        $kpnkategoris = KpnKategori::all();
        $kgbkategoris = KgbKategori::all();
        return view('livewire.form-kategori', compact(
            [
                'categories',
                'suratkategoris',
                'kpnkategoris',
                'kgbkategoris'
            ]
        ));
    }
}
