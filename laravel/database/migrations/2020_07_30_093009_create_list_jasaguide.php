<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListJasaguide extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_jasaguide', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('asal');
            $table->string('umur');
            $table->string('ket');
            $table->integer('harga');
            $table->date('tgl_lahir');
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
        Schema::dropIfExists('list_jasaguide');
    }
}