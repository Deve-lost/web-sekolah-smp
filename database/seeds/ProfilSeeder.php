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
        	'sub_kategori' => 'Sejarah Singkat',
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
            'embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.078358764098!2d108.13635551450425!3d-7.345097774294043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f55e49b5c1a8b%3A0x9327881d622eaa0a!2sSingaparna%20Plaza!5e0!3m2!1sid!2sid!4v1593240754122!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>'
        ]);
    }
}
