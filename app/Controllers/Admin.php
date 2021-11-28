<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'halaman admin'
        ];
        return view('admin/index', $data);
        // echo 'Saya Rizka Akbar Syaukany';
        
    }
    public function update(){
        $data = [
            'title' => 'Update Data'
        ];
        return view('admin/update', $data);
    }
    public function update_siswa(){
        $data = [
            'title' => 'update_siswa'
        ];
        return view('admin/update_siswa',$data);
    }
    public function update_guru(){
        $data = [
            'title' => 'update_guru'
        ];
        return view('admin/update_guru',$data);
    }
    public function update_kelas(){
        $data = [
            'title' => 'update_kelas'
        ];
        return view('admin/update_kelas',$data);
    }
    public function tampilan(){
        $data = [
            'title' => 'Tampilan'
        ];
        return view('admin/tampilan',$data);
    }
    public function tampilan_siswa(){
        $data = [
            'title' => 'Tampilan Siswa'
        ];
        return view('admin/tampilan_siswa',$data);
    }
    public function tampilan_guru(){
        $data = [
            'title' => 'Tampilan Guru'
        ];
        return view('admin/tampilan_guru',$data);
    }
    public function tampilan_kelas(){
        $data = [
            'title' => 'Tampilan kelas'
        ];
        return view('admin/tampilan_kelas',$data);
    }
}