<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Extrakurikuler;

class ExtrakurikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $neko = ExtraKurikuler::latest()->get();

        return view('extrakurikuler.index', compact('neko'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('extrakurikuler.create');
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
            'nama_ek' => 'required|max:191',
            'deskripsi' => 'required',
            'jml_anggota' => 'required|max:11',
            'path' => 'mimes:jpeg,jpg,png'
        ]);

        if ($request->path != NULL) {
            $fileMove = Storage::disk('public')->putFile('extrakurikuler',$request->file('path'));
        } else {
            $fileMove = NULL;
        }

        $slug = Str::of($request->nama_ek)->slug('-');

        $neko = [
            'nama_ek' => $request->nama_ek,
            'slug' => $slug,
            'deskripsi' => $request->deskripsi,
            'jml_anggota' => $request->jml_anggota,
            'path' => $fileMove
        ];

        Extrakurikuler::create($neko);

        return redirect()->route('extrakurikuler.index')->with('store','');
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
    public function edit(Extrakurikuler $extrakurikuler)
    {
        return view('extrakurikuler.edit', ['jquin' => $extrakurikuler]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Extrakurikuler $extrakurikuler)
    {
        $request->validate([
            'nama_ek' => 'required|max:191',
            'deskripsi' => 'required',
            'jml_anggota' => 'required|max:11',
            'path' => 'mimes:jpeg,jpg,png'
        ]);

        $fileOri = $request->file('path');
       
        if (empty($request->path)) {
            $fileMove = $request->fileOri;
        } else {
            Storage::delete('public/'.$request->fileOri);
            $fileMove = Storage::disk('public')->putFile('extrakurikuler', $fileOri);
        }

        $neko = [
            'nama_ek' => $request->nama_ek,
            'deskripsi' => $request->deskripsi,
            'jml_anggota' => $request->jml_anggota,
            'path' => $fileMove
        ];

        $extrakurikuler->update($neko);

        return redirect()->route('extrakurikuler.index')->with('update','');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Extrakurikuler $extrakurikuler)
    {
        Storage::delete('public/'.$extrakurikuler->path);
        $extrakurikuler->delete();

        return redirect()->back()->with('destroy','');
    }
}
