<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\SuratKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suratkategori = SuratKategori::all();
        $surat = Surat::latest()->get();

        return view('surat.index', compact('suratkategori', 'surat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suratkategori = SuratKategori::orderBy('id', 'desc')->get();

        return view('surat.create', compact('suratkategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $surat = new Surat();
        $surat->id = (string) Str::uuid();
        $surat->tanggal = $request->tanggal;
        $surat->nomor = $request->nomor;
        $surat->perihal = $request->perihal;
        $surat->lampiran = $request->lampiran;
        $surat->keterangan = $request->keterangan;
        $surat->penerima = $request->penerima;
        $surat->surat_kategori_id = $request->input('surat_kategori_id');
        $surat->save();

        return redirect()->route('surat.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Surat $surat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Surat $surat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Surat $surat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Surat $surat)
    {
        //
    }
}
