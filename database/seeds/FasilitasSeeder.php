<?php

use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Facility::create([
            'gambar' => '1593329292.jpg',
            'nama_fasilitas' => 'Fasilitas 1',
            'deskripsi' => 'Deskripsi Fasilitas 1',
            'olahraga_siang' => 75000,
            'olahraga_malam' => 100000,
            'dengan_karcis_sponsor' => 1500000,
            'dengan_sponsor' => 1000000,
            'tanpa_karcis_sponsor' => 750000,
        ]);

        \App\Facility::create([
            'gambar' => '1593329292.jpg',
            'nama_fasilitas' => 'Fasilitas 2',
            'deskripsi' => 'Deskripsi Fasilitas 2',
            'olahraga_siang' => 100000,
            'olahraga_malam' => 130000,
            'dengan_karcis_sponsor' => 1700000,
            'dengan_sponsor' => 1300000,
            'tanpa_karcis_sponsor' => 1000000,
        ]);
    }
}
