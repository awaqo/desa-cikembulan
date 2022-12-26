<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            // data diri
            $table->string('nama');
            $table->string('nik');
            $table->string('no_hp');
            $table->string('email');
            $table->string('jenis_kelamin');
            // alamat
            $table->string('prov');
            $table->string('kab_kota');
            $table->string('kec');
            $table->string('desa_kelurahan');
            $table->text('alamat_ktp');
            // aduan
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('file_pendukung');
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
        //
    }
};
