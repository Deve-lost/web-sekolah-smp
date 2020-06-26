<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\ProfilSekolah;

class ProfilSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $neko = ProfilSekolah::latest()->get();

        return view('profilSekolah.index', compact('neko'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfilSekolah $profil_sekolah)
    {
        return view('profilSekolah.edit', ['jquin' => $profil_sekolah]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProfilSekolah $profil_sekolah)
    {
        $request->validate([
            'sub_kategori' => 'required|max:191',
            'deskripsi' => 'required',
            'path' => 'mimes:png,jpg,jpeg',
        ]);

        $fileOri = $request->file('path');
       
        if (empty($request->path)) {
            $fileMove = $request->fileOri;
        } else {
            Storage::delete('public/'.$request->fileOri);
            $fileMove = Storage::disk('public')->putFile('profilSekolah', $fileOri);
        }

        $neko = [
            'sub_kategori' => $request->sub_kategori,
            'deskripsi' => $request->deskripsi,
            'path' => $fileMove
        ];

        $profil_sekolah->update($neko);

        return redirect()->route('profil-sekolah.index')->with('update','');
    }
}
