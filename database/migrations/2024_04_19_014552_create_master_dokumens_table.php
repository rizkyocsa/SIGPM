<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterDokumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_dokumens', function (Blueprint $table) {
            $table->id();
            $table->string('kategori', 50);
            $table->string('sub_kategori', 50)->nullable();
            $table->string('kriteria', 50)->nullable();
            $table->string('elemen', 50)->nullable();
            $table->string('nama_dokumen', 75);
            $table->string('tautan', 75);
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
        Schema::dropIfExists('master_dokumens');
    }
}
