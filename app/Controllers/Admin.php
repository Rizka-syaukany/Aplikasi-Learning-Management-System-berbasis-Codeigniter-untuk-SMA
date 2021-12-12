<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\GuruModel;
use App\Models\UserModel;
use App\Models\SiswaModel;

class Admin extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->siswaModel = new SiswaModel();
        $this->guruModel = new GuruModel();
        $this->adminModel = new AdminModel();
    }
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
    public function tampilan_siswa($id_kelas){
        //  $siswa = $this->siswaModel->get_siswa($nama_kelas);
        $data = [
            'title' => 'Tampilan Siswa',
            'siswa' => $this->siswaModel->get_siswa($id_kelas)
        ];
        // dd($data);
        return view('admin/tampilan_siswa',$data);
        // echo $id_kelas;
    }
    public function tampilan_guru(){
        $data = [
            'title' => 'Tampilan Guru',
            'guru' => $this->guruModel->get_guru()
        ];
        // dd($data);
        return view('admin/tampilan_guru',$data);
    }
    public function tampilan_kelas(){
        $data = [
            'title' => 'Tampilan kelas',
            'kelas' => $this->siswaModel->get_kelas()
            
        ];
        return view('admin/tampilan_kelas',$data);
    }
    public function detail_siswa($id_user){
        $data = [
            'title' => 'Detail Siswa',
            'detail' => $this->siswaModel->detailSiswa($id_user)
            
        ];
        // dd($data);
        return view('admin/detail_siswa',$data);
    }
    public function detail_guru($id_user){
        $data = [
            'title' => 'Detail Guru',
            'detail'=> $this->guruModel->detail_guru($id_user)
        ];
        // dd($data);
        return view('admin/detail_guru',$data);
    }
    public function tampil_admin(){
        $data = [
            'title' => 'Detail Admin',
            'admin'=> $this->adminModel->get_admin()
        ];
        // dd($data);
        return view('admin/tampilan_admin',$data);
    }
    public function detail_admin($id_user){
        $data = [
            'title'=> 'Detail Admmin',
            'detail'=> $this->adminModel->get_admin($id_user)
        ];
        // dd($data);
        return view('admin/detail_admin',$data);
    }
}