<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_users', function (Blueprint $table) {
            $table->id();
            $table->integer('register_id')->constrained('registers');
            $table->string('email_wali');
            $table->string('namaLengkap_wali');
            $table->string('tempatLahir_wali');
            $table->string('tanggalLahir_wali');
            $table->string('jenisKelamin_wali');
            $table->string('usia_wali');
            $table->string('agama_wali');
            $table->string('pekerjaan_wali');
            $table->string('alamat_wali');
            $table->string('noTelp_wali');
            $table->string('foto_wali');
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
        Schema::dropIfExists('parent_users');
    }
}
