<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('namaLengkap');
            $table->string('email');
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
            $table->string('jenisKelamin');
            $table->string('usia');
            $table->string('tinggiBadan');
            $table->string('beratBadan');
            $table->string('agama');
            $table->string('asalSekolah');
            $table->string('tingkatanSekolah');
            $table->string('unitLatihan');
            $table->string('tingkatanSabuk');
            $table->string('riwayatKesehatan');
            $table->string('alamat');
            $table->string('noTelp');
            $table->string('foto');
            $table->string('akte')->nullable();
            $table->string('status');
            $table->string('status_pendaftaran')->default('Menunggu Persetujuan');
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
        Schema::dropIfExists('registers');
    }
}
