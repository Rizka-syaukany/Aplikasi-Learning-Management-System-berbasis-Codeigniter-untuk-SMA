<?php

namespace App\Controllers;

class Guru extends BaseController
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
            'title' => 'Halaman Guru'
        ];
        return view('guru/index', $data);
        // echo 'Saya Rizka Akbar Syaukany';
        
    }

}