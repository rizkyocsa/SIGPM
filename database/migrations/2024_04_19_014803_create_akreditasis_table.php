<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkreditasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akreditasis', function (Blueprint $table) {
            $table->id();
            $table->string('kriteria_1');
            $table->string('kriteria_2');
            $table->string('kriteria_3');
            $table->string('kriteria_4');
            $table->string('kriteria_5');
            $table->string('kriteria_6');
            $table->string('kriteria_7');
            $table->string('kriteria_8');
            $table->string('kriteria_9');
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
        Schema::dropIfExists('akreditasis');
    }
}
