<?php

namespace App\Models;

use CodeIgniter\Model;

class m_barang extends Model
{
    protected $table = 'tbl_barang';
    protected $primaryKey = 'id_barang';
    protected $allowedFields = ['nama_barang', 'stok', 'harga', 'foto'];
}
