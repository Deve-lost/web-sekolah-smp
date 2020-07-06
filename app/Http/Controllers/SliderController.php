<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $neko = Slider::latest()->get();

        return view('slider.index', compact('neko'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
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
            'judul' => 'required|max:80',
            'deskripsi' => 'required|max:191',
            'path' => 'required|mimes:png,jpg,jpeg'
        ]);

        $path = Storage::disk('public')->putFile('slider', $request->file('path'));

        $jquin = Slider::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'path' => $path
        ]);

        return redirect()->route('slider.index')->with('store','');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('slider.edit', ['jquin' => $slider]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'judul' => 'required|max:80',
            'deskripsi' => 'required|max:191',
        ]);

        $fileOri = $request->file('path');
       
        if (empty($request->path)) {
            $fileMove = $request->fileOri;
        } else {
            Storage::delete('public/'.$request->fileOri);
            $fileMove = Storage::disk('public')->putFile('slider', $fileOri);
        }

        $jquin = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'path' => $fileMove
        ];

        $slider->update($jquin);

        return redirect()->route('slider.index')->with('update','');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        Storage::delete('public/'.$slider->path);
        $slider->delete();

        return redirect()->back()->with('destroy','');
    }
}
