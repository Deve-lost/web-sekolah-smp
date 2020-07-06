<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontak;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $neko = Kontak::where('nama_kontak', '!=', NULL)->orderBy('nama_kontak', 'ASC')->get();

        return view('kontak.sosmed', compact('neko'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $neko = [
            'nama_kontak' => $request->nama_kontak,
            'icon' => $request->icon,
            'alamat' => $request->alamat,
            'url' => $request->url,
            'embed' => $request->embed,
        ];

        Kontak::create($neko);

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
        $neko = [
            'nama_kontak' => $request->nama_kontak,
            'icon' => $request->icon,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'url' => $request->url,
            'embed' => $request->embed,
        ];

        $jquin = Kontak::findOrFail($request->id);
        $jquin->update($neko);

        return redirect()->back()->with('update','');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kontak $kontak)
    {
        $kontak->delete();

        return redirect()->back()->with('destroy','');
    }

    // Alamat
    public function alamat()
    {
        $jquin = Kontak::where('alamat', '!=', NULL)->first();

        return view('kontak.alamat', compact('jquin'));
    }
}
