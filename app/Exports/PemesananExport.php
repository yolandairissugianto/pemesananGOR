<?php

namespace App\Exports;

use App\Pemesanan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class PemesananExport implements FromCollection, WithStrictNullComparison, WithHeadings, WithMapping, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Pemesanan::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'Fasilitas',
            'Status Pengajuan',
            'Status Pembayaran',
            'Nama',
            'Event Organizer',
            'Kegiatan',
            'Deskripsi',
            'Email',
            'No HP',
            'Waktu Mulai',
            'Waktu Selesai',
            'Jenis Peminjaman',
            'Lama Peminjaman'
        ];
    }

    /**
     * @param mixed $row
     *
     * @return array
     */
    public function map($row): array
    {
        if ($row->penggunaan_olahraga_siang != null || $row->penggunaan_olahraga_malam != null){
            $jenis_peminjaman = "Per Jam";
            $lama_peminjaman = (($row->penggunaan_olahraga_siang != null) ? $row->penggunaan_olahraga_siang : 0)
                + (($row->penggunaan_olahraga_malam != null) ? $row->penggunaan_olahraga_malam : 0) . " Jam";
        } elseif ($row->penggunaan_selain_olahraga_dengan_menarik_karcis_sponsor != null){
            $jenis_peminjaman = "Harian";
            $lama_peminjaman = $row->penggunaan_selain_olahraga_dengan_menarik_karcis_sponsor . " Hari";
        } elseif ($row->penggunaan_selain_olahraga_dengan_sponsor != null) {
            $jenis_peminjaman = "Harian";
            $lama_peminjaman = $row->penggunaan_selain_olahraga_dengan_sponsor . " Hari";
        } elseif ($row->penggunaan_selain_olahraga_tanpa_karcis_sponsor != null) {
            $jenis_peminjaman = "Harian";
            $lama_peminjaman = $row->penggunaan_selain_olahraga_tanpa_karcis_sponsor . " Hari";
        }

        $fields = [
            $row->fasilitas->nama_fasilitas,
            $row->terima_pengajuan === 1 ? "Pengajuan Diterima" : "Pengajuan Belum Diterima",
            $row->already_paid === 1 ? "Sudah Bayar" : "Belum Bayar",
            $row->nama,
            $row->event_organizer,
            $row->kegiatan,
            $row->deskripsi,
            $row->email,
            $row->no_hp,
            $row->start,
            $row->finish,
            $jenis_peminjaman,
            $lama_peminjaman

        ];
        return $fields;
    }
}
