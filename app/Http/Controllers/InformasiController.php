<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Informasi;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $neko = Informasi::latest()->get();

        return view('berita.index', compact('neko'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
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
            'judul' => 'required|max:191',
            'artikel' => 'required',
            'path' => 'mimes:jpeg,jpg,png'
        ]);

        if ($request->path != NULL) {
            $fileMove = Storage::disk('public')->putFile('beritaInformasi',$request->file('path'));
        } else {
            $fileMove = NULL;
        }

        $neko = [
            'user_id' => auth()->user()->id,
            'judul' => $request->judul,
            'artikel' => $request->artikel,
            'path' => $fileMove
        ];

        Informasi::create($neko);

        return redirect()->route('informasi.index')->with('store','');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Informasi $informasi)
    {
        return view('berita.edit', ['jquin' => $informasi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informasi $informasi)
    {
        $request->validate([
            'judul' => 'required|max:191',
            'artikel' => 'required',
            'path' => 'mimes:jpeg,jpg,png'
        ]);
        
        $fileOri = $request->file('path');
       
        if (empty($request->path)) {
            $fileMove = $request->fileOri;
        } else {
            Storage::delete('public/'.$request->fileOri);
            $fileMove = Storage::disk('public')->putFile('beritaInformasi', $fileOri);
        }

        $neko = [
            'user_id' => auth()->user()->id,
            'judul' => $request->judul,
            'artikel' => $request->artikel,
            'path' => $fileMove
        ];

        $informasi->update($neko);

        return redirect()->route('informasi.index')->with('update','');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informasi $informasi)
    {
        Storage::delete('public/'.$informasi->path);
        $informasi->delete();

        return redirect()->back()->with('destroy','');
    }
}
