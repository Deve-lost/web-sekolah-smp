<?php

use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profil')->insert([
        	'sub_kategori' => 'Profil Sekolah',
        	'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur cupiditate suscipit dicta sint et molestias amet ea nemo laborum quaerat.',
            'path' => 'no-image.png'
        ]);

        DB::table('profil')->insert([
        	'sub_kategori' => 'Sambutan Kepala Sekolah',
        	'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur cupiditate suscipit dicta sint et molestias amet ea nemo laborum quaerat.',
            'path' => 'no-image.png'
        ]);

        DB::table('profil')->insert([
        	'sub_kategori' => 'Visi Misi',
        	'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur cupiditate suscipit dicta sint et molestias amet ea nemo laborum quaerat.',
            'path' => 'no-image.png'
        ]);
    }
}
