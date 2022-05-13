<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //method up untuk membuat tabel
    public function up()
    {
        Schema::create('table_mahasiswa', function (Blueprint $table) {
            $table->increments('id_mahasiswa');
            $table->string('nama_mahasiswa');
            $table->integer('nim_mahasiswa');
            $table->text('alamat_mahasiswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //method down untuk menghapus table
    public function down()
    {
        Schema::dropIfExists('table_mahasiswa');
    }
}
