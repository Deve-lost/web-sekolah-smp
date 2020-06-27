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

        DB::table('kontak')->insert([
            'nama_kontak' => NULL,
            'icon' => NULL,
            'url' => NULL,
            'no_hp' => '+62',
            'email' => 'sekolahku@gmail.com',
            'alamat' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum inventore itaque porro numquam fugiat harum, libero, ipsam deserunt ducimus dolore.',
            'embed' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.'
        ]);
    }
}
