<?php

namespace App\Controllers;

class Lms extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'login'
        ];
        return view('lms/login', $data);
        // echo 'Saya Rizka Akbar Syaukany';
        
    }
    public function about(){
        $data = [
            'title' => 'Profile sekolah'
        ];
        return view('lms/about', $data);
    }
    public function alms(){
        $data = [
            'title' => 'Mengenal LMS'
        ];
        return view('lms/alms',$data);
    }
}