<?php

namespace App\Http\Controllers;

use App\Models\Kpn;
use App\Models\KpnKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KpnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kpnkategori = KpnKategori::all();
        $kpn = Kpn::latest()->get();

        return view('kpn.index', compact('kpnkategori', 'kpn'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kpnkategori = KpnKategori::all();

        return view('kpn.create', compact('kpnkategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kpn = new Kpn();
        $kpn->id = (string) Str::uuid();
        $kpn->nama = $request->nama;
        $kpn->nip = $request->nip;
        $kpn->golruang = $request->golruang;
        $kpn->tmt_terakhir = $request->tmt_terakhir;
        $kpn->unor_nama = $request->unor_nama;
        $kpn->status_berkas = $request->status_berkas;
        $kpn->keterangan = $request->keterangan;
        $kpn->kpn_kategori_id = $request->input('kpn_kategori_id');
        $kpn->save();

        return redirect()->route('kpn.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kpn $kpn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kpn $kpn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kpn $kpn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kpn $kpn)
    {
        //
    }
}
