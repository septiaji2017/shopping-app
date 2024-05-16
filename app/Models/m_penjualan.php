<?php

namespace App\Models;

use CodeIgniter\Model;

class m_penjualan extends Model
{
    protected $table = 'tbl_penjualan';
    protected $primaryKey = 'id_transaksi';
    protected $allowedFields = [
        'tanggal',
        'total',
        'nama',
        'kontak',
        'alamat',
        'kode_pos'
    ];
}
