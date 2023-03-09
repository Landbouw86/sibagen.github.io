<?php

namespace App\Http\Controllers;

use App\Models\Kgb;
use App\Models\KgbKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KgbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kgbkategori = KgbKategori::all();
        $kgb = Kgb::orderBy('id', 'desc')->get();

        return view('kgb.index', compact('kgbkategori', 'kgb'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kgbkategori = KgbKategori::all();

        return view('kgb.create', compact('kgbkategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kgb = new Kgb();
        $kgb->id = (string) Str::uuid();
        $kgb->tanggal = $request->tanggal;
        $kgb->nama = $request->nama;
        $kgb->nip = $request->nip;
        $kgb->golruang = $request->golruang;
        $kgb->tmt_terakhir = $request->tmt_terakhir;
        $kgb->mkg_lama = $request->mkg_lama;
        $kgb->mkg_baru = $request->mkg_baru;
        $kgb->tmt_berikutnya = $request->tmt_berikutnya;
        $kgb->unor_nama = $request->unor_nama;
        $kgb->keterangan = $request->keterangan;
        $kgb->kgb_kategori_id = $request->input('kgb_kategori_id');
        $kgb->save();

        return redirect()->route('kgb.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kgb $kgb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kgb $kgb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kgb $kgb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kgb $kgb)
    {
        //
    }
}
