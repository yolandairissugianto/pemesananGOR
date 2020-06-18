<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->id();
            $table->text('gambar');
            $table->string('nama_fasilitas');
            $table->longText('deskripsi');
            $table->integer('olahraga_siang');
            $table->integer('olahraga_malam');
            $table->integer('dengan_karcis_sponsor');
            $table->integer('dengan_sponsor');
            $table->integer('tanpa_karcis_sponsor');
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
        Schema::dropIfExists('facilities');
    }
}
