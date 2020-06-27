<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigrationKontakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontak', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kontak', 50)->nullable();
            $table->string('icon', 30)->nullable();
            $table->text('alamat')->nullable();
            $table->text('url')->nullable();
            $table->string('no_hp', 30)->nullable();
            $table->string('email', 191)->nullable();
            $table->text('embed')->nullable();
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
        Schema::dropIfExists('kontak');
    }
}
