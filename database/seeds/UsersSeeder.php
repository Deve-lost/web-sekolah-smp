<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'nama_lengkap' => 'Jquin Nekosuki',
        	'username' => 'developer',
        	'password' => bcrypt('rahasia'),
            'path' => 'default.png'
        ]);
    }
}
