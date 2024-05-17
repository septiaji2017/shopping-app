<?php

namespace App\Models;

use CodeIgniter\Model;

class m_barang extends Model
{
    protected $table = 'tbl_barang';
    protected $primaryKey = 'id_barang';
    protected $allowedFields = ['nama_barang', 'stok', 'harga', 'foto'];

    // Add a method to decrease the stock
    public function decreaseStock($id_barang, $quantity)
    {
        $this->set('stok', 'stok - ' . intval($quantity), false)
            ->where('id_barang', $id_barang)
            ->update();
    }
}