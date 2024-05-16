<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class c_validation extends Controller
{
    public function index()
    {
        return view('v_form');
    }

    public function process_form()
    {
        $validation = \Config\Services::validation();

        $validationRules = [
            'nama' => 'required|alpha_space',
            'kota' => 'required',
            'provinsi' => 'required',
            'alamat' => 'required',            
            'no_hp' => 'required|numeric',
            'kode_pos' => 'required|numeric',            
        ];

        if (!$this->validate($validationRules)) {
            return view('v_form', [
                'validation' => $validation,
            ]);
        } else {
            $data = [
                'nama' => $this->request->getPost('name'),
                'kota' => $this->request->getPost('kota'),
                'provinsi' => $this->request->getPost('provinsi'),
                'alamat' => $this->request->getPost('alamat'),
                'no_hp' => $this->request->getPost('no_hp'),
                'kode_pos' => $this->request->getPost('kode_pos')
            ];
            print_r($data);
            $successMessage = 'Form submitted successfully!';
            return view('v_form', ['successMessage' => $successMessage]);
        }
    }
}
