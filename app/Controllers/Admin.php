<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\GuruModel;
use App\Models\UserModel;
use App\Models\SiswaModel;
use App\Models\User;

class Admin extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new User();
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
        $data = [
            'title' => 'Tampilan Siswa',
            'siswa' => $this->siswaModel->get_siswa($id_kelas)
        ];
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
    public function add_guru(){
        $data = [
            'title'=> 'Tambah guru'
        ];
        return view('admin/add_guru',$data);
    }
    public function save(){
        //validasi
        if($this->validate([
            'judul'=>'required',
            'nip'=>'rewuired|is_unique[user.NIP]'
        ])){
            return redirect()->to('admin/tampilan_guru');
        }


        //memasukan data ke database
        $this->userModel->save([
            'nama_user' => $this->request->getVar('nama_user'),
            'NIP' => $this->request->getVar('nip'),
            'alamat_user' => $this->request->getVar('alamat'),
            'jenis_kelamin'=> $this->request->getVar('jenis_kelamin'),
            'email_user' => $this->request->getVar('email_user'),
            'password' => $this->request->getVar('password'),
            'telp_user' => $this->request->getVar('telp_user'),
            'profile_user' => $this->request->getVar('profile_user'),
            'level' => 0
        ]);
        // dd($this->request->getVar());
        session()->setFlashdata('pesan','Behasil menambahkan data guru.');
        return redirect()->to('/admin/tampilan_guru');
    }
}