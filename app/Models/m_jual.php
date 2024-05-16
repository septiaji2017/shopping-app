<?php

namespace App\Models;

use CodeIgniter\Model;

class m_jual extends Model
{
    protected $table = 'tbl_jual';
    protected $primaryKey = 'id_jual';
    protected $allowedFields = [
        'id_transaksi',
        'id_barang',
        'jumlah_jual',
        'harga_jual'
    ];
}
