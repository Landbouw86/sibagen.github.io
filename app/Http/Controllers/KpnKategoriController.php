<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\KpnKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KpnKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('form.create-kpnkategori', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kpnkategoris = new KpnKategori();
        $kpnkategoris->id = (string) Str::uuid();
        $kpnkategoris->name = $request->name;
        $kpnkategoris->description = $request->description;
        $kpnkategoris->category_id = $request->input('category_id');
        $kpnkategoris->save();

        return redirect()->route('form.kategori');
    }

    /**
     * Display the specified resource.
     */
    public function show(KpnKategori $kpnKategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KpnKategori $kpnKategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KpnKategori $kpnKategori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KpnKategori $kpnKategori)
    {
        //
    }
}
