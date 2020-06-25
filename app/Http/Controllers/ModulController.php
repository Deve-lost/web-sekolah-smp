<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Modul;

class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $neko = Modul::latest()->get();

        return view('modul.index', compact('neko'));
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
            'nama_modul' => 'required|max:191',
            'kategori' => 'required',
            'path' => 'required|mimes:jpg,jpeg,pdf,png,docx,xml'
        ]);

        $fileMove = Storage::disk('public')->putFile('modul',$request->file('path'));

        $neko = [
            'nama_modul' => $request->nama_modul,
            'kategori' => $request->kategori,
            'path' => $fileMove
        ];

        Modul::create($neko);

        return redirect()->back()->with('store','');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'nama_modul' => 'required|max:191',
            'kategori' => 'required',
            'path' => 'mimes:jpg,jpeg,pdf,png,docx,xml'
        ]);

        $fileOri = $request->file('path');
       
        if (empty($request->path)) {
            $fileMove = $request->fileOri;
        } else {
            Storage::delete('public/'.$request->fileOri);
            $fileMove = Storage::disk('public')->putFile('modul', $fileOri);
        }

        $neko = [
            'nama_modul' => $request->nama_modul,
            'kategori' => $request->kategori,
            'path' => $fileMove
        ];

        $jquin = Modul::findOrFail($request->id);
        $jquin->update($neko);

        return redirect()->back()->with('update','');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modul $modul)
    {
        Storage::delete('public/'.$modul->path);
        $modul->delete();

        return redirect()->back()->with('destroy','');
    }

    public function download(Modul $modul)
    {
        return response()->download(storage_path('app/public/'.$modul->path));
    }
}
