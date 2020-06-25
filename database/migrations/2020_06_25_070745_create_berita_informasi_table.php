<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaInformasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita_informasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('judul', 191);
            $table->longtext('artikel');
            $table->string('path', 191)->nullable();
            $table->timestamps();

            // Relasi
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berita_informasi');
    }
}
