<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }
    public function index()
    {

        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }

        $data = [
            'title' => 'Laman Siswa'
        ];
        return view('siswa/index', $data);
        // echo 'Saya Rizka Akbar Syaukany';
        
    }
    
}