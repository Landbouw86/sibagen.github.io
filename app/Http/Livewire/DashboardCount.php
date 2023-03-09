<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Kgb;
use App\Models\Kpn;
use App\Models\Surat;
use Livewire\Component;

class DashboardCount extends Component
{
    public function render()
    {
        $categories = Category::with('surat', 'kpn', 'kgb')->get();
        $surat = Surat::latest()->get();
        $kpn = Kpn::latest()->get();
        $kgb = Kgb::latest()->get();
        return view('livewire.dashboard-count', compact('categories', 'surat', 'kpn', 'kgb'));
    }
}
