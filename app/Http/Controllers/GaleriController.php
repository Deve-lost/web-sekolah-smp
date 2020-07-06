<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Galeri;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $neko = Galeri::latest()->get();

        return view('galeri.index', compact('neko'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:50',
            'deskripsi' => 'max:191',
            'path' => 'required|mimes:jpg,jpeg,png'
        ]);

        $path = Storage::disk('public')->putFile('galeri', $request->file('path'));

        $jquin = Galeri::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'path' => $path
        ]);

        return redirect()->route('galeri.index')->with('store','');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeri $galeri)
    {
        return view('galeri.edit', ['jquin' => $galeri]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'judul' => 'required|max:50',
            'deskripsi' => 'max:191',
            'path' => 'mimes:jpg,jpeg,png'
        ]);

        $fileOri = $request->file('path');
       
        if (empty($request->path)) {
            $fileMove = $request->fileOri;
        } else {
            Storage::delete('public/'.$request->fileOri);
            $fileMove = Storage::disk('public')->putFile('galeri', $fileOri);
        }

        $jquin = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'path' => $fileMove
        ];

        $galeri->update($jquin);

        return redirect()->route('galeri.index')->with('update','');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeri $galeri)
    {
        Storage::delete('public/'.$galeri->path);
        $galeri->delete();

        return redirect()->back()->with('destroy','');
    }
}
