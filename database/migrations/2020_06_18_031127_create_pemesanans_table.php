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
            $table->integer('id_fasilitas')->unsigned();
            $table->string('code');
            $table->boolean('already_paid')->default(false);
            $table->boolean('have_sent_code')->default(false);
            $table->boolean('terima_pengajuan')->default(false);
            $table->string('nik');
            $table->string('nama');
            $table->string('event_organizer');
            $table->string('kegiatan');
            $table->string('deskripsi');
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

            $table->foreign('id_fasilitas')->references('id')->on('facilities');
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
