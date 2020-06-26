<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {

            $table->id();
            $table->integer('id_fasilitas')->unsigned();
            $table->dateTime('start');
            $table->dateTime('finish');
            $table->boolean('penggunaan_olahraga_siang');
            $table->boolean('penggunaan_olahraga_malam');
            $table->boolean('penggunaan_selain_olahraga_dengan_menarik_karcis_sponsor');
            $table->boolean('penggunaan_selain_olahraga_dengan_sponsor');
            $table->boolean('penggunaan_selain_olahraga_tanpa_karcis_sponsor');
            $table->integer('price');
            $table->string('surat');
            $table->string('nik');
            $table->string('nama_penanggung_jawab');
            $table->string('nama_event_organizer');
            $table->string('surat_pengajuan');
            $table->string('email');
            $table->string('no_hp');
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
        Schema::dropIfExists('pemesanans');
    }
}
