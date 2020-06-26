<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Informasi;
use App\Extrakurikuler;
use App\Modul;
use App\Galeri;
use App\ProfilSekolah;

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

    public function beritaInfo()
    {
    	$beritaInfo = Informasi::latest()->paginate(6);

    	return view('sites.beritaInfo', compact('beritaInfo'));
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
}