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
            // format -> nama-id_fasilitas-random(6) digunakan untuk pengecekan chat_id pada telegram api
            $table->string('code');
            $table->integer('id_fasilitas')->unsigned();
            $table->string('nama_penanggung_jawab');
            $table->string('nama_event_organizer');
            $table->string('surat');
            $table->string('surat_pengajuan');
            $table->string('email');
            $table->string('no_hp');
            $table->dateTime('start');
            $table->dateTime('finish');
            $table->tinyInteger('penggunaan_olahraga_siang')->nullable();
            $table->tinyInteger('penggunaan_olahraga_malam')->nullable();
            $table->tinyInteger('penggunaan_selain_olahraga_dengan_menarik_karcis_sponsor')->nullable();
            $table->tinyInteger('penggunaan_selain_olahraga_dengan_sponsor')->nullable();
            $table->tinyInteger('penggunaan_selain_olahraga_tanpa_karcis_sponsor')->nullable();
            $table->integer('price');
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
