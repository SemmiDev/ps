<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penitipan extends Model
{
    use HasFactory;

    protected $table = 'penitipan'; // Adjust the table name if needed

    protected $fillable = [
        'user_id',
        'nama_pelanggan',
        'alamat_pelanggan',
        'tanggal_penitipan',
        'tanggal_pengambilan',
        'ukuran_box',
        'harga',
        'token',
        'status_pembayaran',
        'metode_pembayaran',
        'apakah_telah_diambil',
        'bukti_transaksi'
    ];

}
