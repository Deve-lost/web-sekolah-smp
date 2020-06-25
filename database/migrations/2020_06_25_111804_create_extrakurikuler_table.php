<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtrakurikulerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extrakurikuler', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ek', 50);
            $table->longtext('deskripsi');
            $table->integer('jml_anggota');
            $table->string('path', 191)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extrakurikuler');
    }
}
