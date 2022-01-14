<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Halaman Siswa'
        ];
        return view('siswa/index', $data);
        // echo 'Saya Rizka Akbar Syaukany';
        
    }

}