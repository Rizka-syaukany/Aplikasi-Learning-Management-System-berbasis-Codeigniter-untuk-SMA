<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\USER();
    }
    public function index()
    {
        return view('welcome_message');
    }

    public function auth()
    {
        $email = $this->request->getPost('email_user');
        $pass = $this->request->getPost('password');

        $cek = $this->userModel->where("email_user", $email)->first();

        //jika data ditemukan 
        if ($cek) {
            //pilih level
            if ($cek->level == 0) {
                //to admin
                return view("admin/index");
            } elseif ($cek->level == 1) {
                //to guru
                return view("guru/index");
            } else {
                // to siswa
                return view("siswa/index");
            }
        }
    }
}
