<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_mahasiswa', function (Blueprint $table) {
            #isi dengan "$table->tipe("nama-tabel",panjang (opsional));"
            $table->string('nim',10)->primary();
            $table->string('nama_MHS');
            $table->string('prodi');
            $table->string('jurusan');
            $table->year('angkatan');
            $table->longText('alamat');
            $table->softDeletes();
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
        Schema::dropIfExists('tabel_mahasiswa');
    }
}
