<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Extrakurikuler;
use App\Modul;

class DashboardController extends Controller
{
	public function admin()
	{
		$mG = Modul::where('kategori','guru')->count();
		$mS = Modul::where('kategori','siswa')->count();
		$ek = Extrakurikuler::count();

		return view('dashboard.admin', compact('mG','mS','ek'));
	}
}
