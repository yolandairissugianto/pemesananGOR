<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    public static $BATASJAM = 17;
    protected $guarded = [];

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'id_fasilitas', 'id');
    }
}
