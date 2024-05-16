<?php

namespace App\Controllers;

use App\Models\m_penjualan;
use App\Models\m_jual;
use CodeIgniter\Controller;
use Config\Services;

class c_checkout extends Controller
{
    public function index()
    {
        return view('checkout_form');
    }

    public function process_form()
{
    $session = session();
    $validation = Services::validation();

    // Aturan validasi
    $validation->setRules([
        'nama' => 'required',
        'no_hp' => 'required',
        'kota' => 'required',
        'provinsi' => 'required',
        'alamat' => 'required',
        'kode_pos' => 'required'
    ]);

    // Jika validasi gagal
    if (!$validation->withRequest($this->request)->run()) {
        return redirect()->back()->withInput()->with('errors', $validation->getErrors());
    }

    // Ambil data dari form
    $nama = $this->request->getPost('nama');
    $no_hp = $this->request->getPost('no_hp');
    $kota = $this->request->getPost('kota');
    $provinsi = $this->request->getPost('provinsi');
    $alamat = $this->request->getPost('alamat');
    $kode_pos = $this->request->getPost('kode_pos');

    // Ambil data barang dari session
    $cart = $session->get('cart');

    if (empty($cart)) {
        return redirect()->back()->with('error', 'Keranjang belanja kosong.');
    }

    // Hitung total harga
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['harga'] * $item['quantity'];
    }

    // Siapkan data untuk tbl_penjualan
    $penjualanModel = new m_penjualan();
    $dataPenjualan = [
        'tanggal' => date('Y-m-d H:i:s'),
        'total' => $total, // Total harga
        'nama' => $nama,
        'kontak' => $no_hp,
        'alamat' => $alamat,
        'kode_pos' => $kode_pos
    ];

    // Masukkan data ke tbl_penjualan
    $idTransaksi = $penjualanModel->insert($dataPenjualan);

    // Siapkan model untuk tbl_jual
    $jualModel = new m_jual();

    // Masukkan data barang ke tbl_jual
    foreach ($cart as $item) {
        $dataJual = [
            'id_transaksi' => $idTransaksi,
            'id_barang' => $item['id_barang'],
            'jumlah_jual' => $item['quantity'],
            'harga_jual' => $item['harga']
        ];
        $jualModel->insert($dataJual);
    }

    // Kosongkan keranjang setelah checkout
    $session->remove('cart');

    return redirect()->to('/')->with('successMessage', 'Transaksi berhasil!');
}
}