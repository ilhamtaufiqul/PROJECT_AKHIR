<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuideTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guide', function (Blueprint $table) {
            $table->id();
            $table->string('nama_guide');
            $table->string('asal_guide');
            $table->string('umur_guide');
            $table->string('foto_seo');
            $table->string('foto_guide');
            $table->unsignedBigInteger('id_mountain');
            $table->foreign('id_mountain')
                ->references('id')->on('mountain')
                ->onDelete('cascade');
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
        Schema::dropIfExists('guide');
    }
}