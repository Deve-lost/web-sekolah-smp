<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Kontak;
use App\Modul;
use App\Extrakurikuler;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View()->composer('components.lpfooter',function($view){
            $data['modul'] = Modul::where('kategori', 'siswa')->latest()->paginate(5);
            $data['extrakurikuler'] = Extrakurikuler::latest()->paginate(5);
            $data['kontak'] = Kontak::where('nama_kontak', '!=', NULL)->orderBy('nama_kontak', 'ASC')->get();
            $data['alamat'] = Kontak::where('alamat', '!=', NULL)->first();

            $view->with('alamat' , $data['alamat']);
            $view->with('modul' , $data['modul']);
            $view->with('extrakurikuler' , $data['extrakurikuler']);
            $view->with('kontak' , $data['kontak']);

        });

        View()->composer('components.lpfooter',function($view){
            
        });
    }
}
