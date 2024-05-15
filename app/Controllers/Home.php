<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            ['id' => 1, 'name' => 'Barang 1', 'harga' => '15000'],
            ['id' => 2, 'name' => 'Barang 2', 'harga' => '21000'],
            ['id' => 3, 'name' => 'Barang 3', 'harga' => '25000'],
            ['id' => 4, 'name' => 'Barang 4', 'harga' => '50000'],
            ['id' => 5, 'name' => 'Barang 5', 'harga' => '30000']
        ];

        $table_data['data'] = $data;

        return view('v_landing',$table_data);
    }

    public function contact(): string
    {
        return view('pages/v_contact-us');
    }
    
    public function about(): string
    {
        return view('pages/v_about');
    }  
    
    public function gallery(): string
    {
        return view('pages/v_gallery');
    }      
    
    public function art(): string
    {
        return view('pages/v_art');
    }        

    public function music(): string
    {
        return view('pages/v_music');
    }       
    
    public function finance(): string
    {
        return view('pages/v_finance');
    }       
    
    public function architecture(): string
    {
        return view('pages/v_architecture');
    }           
}
