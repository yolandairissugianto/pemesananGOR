<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    public static $PEMINJAMAN_MENARIK_KARCIS_DAN_SPONSOR = 1;
    public static $PEMINJAMAN_HANYA_DENGAN_SPONSOR = 2;
    public static $PEMINJAMAN_TANPA_KARCIS_DAN_SPONSOR = 3;
    public static $URL_BOT = "https://t.me/GORTRISANJA_BOT";

    public function fasilitas()
    {
        return $this->belongsTo(Facility::class, 'id_fasilitas', 'id');
    }
}
