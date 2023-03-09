<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SuratKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SuratKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('form.create-suratkategori', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $suratkategoris = new SuratKategori();
        $suratkategoris->id = (string) Str::uuid();
        $suratkategoris->name = $request->name;
        $suratkategoris->description = $request->description;
        $suratkategoris->category_id = $request->input('category_id');
        $suratkategoris->save();

        return redirect()->route('form.kategori');
    }

    /**
     * Display the specified resource.
     */
    public function show(SuratKategori $suratKategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SuratKategori $suratKategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SuratKategori $suratKategori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuratKategori $suratKategori)
    {
        //
    }
}
