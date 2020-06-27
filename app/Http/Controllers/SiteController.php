<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Informasi;
use App\Extrakurikuler;
use App\Modul;
use App\Galeri;
use App\ProfilSekolah;
use App\Kontak;

class SiteController extends Controller
{
    public function index()
    {
    	$sliders = Slider::latest()->get();
    	$beritaInfo = Informasi::latest()->limit(4)->get();
        $extrakurikuler = Extrakurikuler::latest()->limit(4)->get();
        $profil = ProfilSekolah::where('id', 2)->first();

    	return view('layouts.landingpage', compact('sliders','beritaInfo','extrakurikuler','profil'));
    }

    public function extrakurikuler()
    {
        $neko = Extrakurikuler::latest()->paginate(6);
        
        return view('sites.extrakurikuler', compact('neko'));
    }

    public function beritaInfo(Request $request)
    {
        if ($request->has('q')) {
            $beritaInfo = Informasi::where('judul','LIKE','%'.$request->q.'%')->paginate(6);
            $rBi = Informasi::limit(6)->get();

            return view('sites.beritaInfo', compact('beritaInfo','rBi'));
        }

    	$beritaInfo = Informasi::latest()->paginate(6);
        $rBi = Informasi::limit(6)->get();

    	return view('sites.beritaInfo', compact('beritaInfo','rBi'));
    }

    public function mGuru()
    {
        $modul = Modul::where('kategori','guru')->latest()->get();

        return view('sites.mGuru', compact('modul'));
    }

    public function mSiswa()
    {
        $modul = Modul::where('kategori','siswa')->latest()->get();

        return view('sites.mSiswa', compact('modul'));
    }

    public function galeri()
    {
        $galeri = Galeri::latest()->get();

        return view('sites.galeri', compact('galeri'));
    }

    // Profil
    public function profilSekolah()
    {
        $profil = ProfilSekolah::where('id', 1)->first();

        return view('sites.profil-sekolah', compact('profil'));
    }

    public function sambutanKepsek()
    {
        $profil = ProfilSekolah::where('id', 2)->first();

        return view('sites.sambutan-kepsek', compact('profil'));
    }

    public function visiMisi()
    {
        $profil = ProfilSekolah::where('id', 3)->first();

        return view('sites.visi-misi', compact('profil'));
    }

    public function kontak()
    {
        $neko = Kontak::orderBy('nama_kontak', 'ASC')->get();
        $alamat = Kontak::where('alamat', '!=', NULL)->first();

        return view('sites.kontak', compact('neko','alamat'));
    }

    // Slug
    public function slugBeritaInfo(Informasi $informasi)
    {
        return view('sites.berita-info-read', ['jquin' => $informasi]);
    }

    public function slugExtrakurikuler(Extrakurikuler $extrakurikuler)
    {
        return view('sites.extrakurikuler-read', ['jquin' => $extrakurikuler]);
    }
}
