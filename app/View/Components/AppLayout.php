<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Kgb;
use App\Models\Kpn;
use App\Models\Surat;
use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $categories = Category::with('suratKategori', 'kpnKategori', 'kgbkategori')->orderBy('id', 'desc')->get();
        $surat = Surat::latest()->get();
        $kpn = Kpn::latest()->get();
        $kgb = Kgb::latest()->get();
        return view('layouts.app', compact('categories', 'surat', 'kpn', 'kgb'));
    }
}
