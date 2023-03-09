<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\KgbKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KgbKategoriController extends Controller
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

        return view('form.create-kgbkategori', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kgbkategoris = new KgbKategori();
        $kgbkategoris->id = (string) Str::uuid();
        $kgbkategoris->name = $request->name;
        $kgbkategoris->description = $request->description;
        $kgbkategoris->category_id = $request->input('category_id');
        $kgbkategoris->save();

        return redirect()->route('form.kategori');
    }

    /**
     * Display the specified resource.
     */
    public function show(KgbKategori $kgbKategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KgbKategori $kgbKategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KgbKategori $kgbKategori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KgbKategori $kgbKategori)
    {
        //
    }
}
