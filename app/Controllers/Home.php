<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('v_landing');
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
