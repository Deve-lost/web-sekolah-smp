<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Informasi;
use App\Extrakurikuler;

class SiteController extends Controller
{
    public function index()
    {
    	$sliders = Slider::latest()->get();
    	$beritaInfo = Informasi::latest()->limit(4)->get();
    	$extrakurikuler = Extrakurikuler::latest()->limit(4)->get();

    	return view('layouts.landingpage', compact('sliders','beritaInfo','extrakurikuler'));
    }

    public function beritaInfo()
    {
    	$beritaInfo = Informasi::latest()->paginate(6);

    	return view('sites.beritaInfo', compact('beritaInfo'));
    }
}
