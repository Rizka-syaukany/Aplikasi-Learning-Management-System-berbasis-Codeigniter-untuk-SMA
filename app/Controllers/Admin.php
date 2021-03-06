<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\GuruModel;
use App\Models\UserModel;
use App\Models\SiswaModel;
use App\Models\KelasModel;
use App\Models\DaftarModel;
use App\Models\User;
use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class Admin extends BaseController
{
    protected $userModel;
    protected $kelasModel;
    protected $siswaModel;
    protected $guruModel;
    protected $adminModel;
    protected $daftarModel;
    public function __construct()
    {
        $this->userModel = new User();
        $this->siswaModel = new SiswaModel();
        $this->guruModel = new GuruModel();
        $this->adminModel = new AdminModel();
        $this->kelasModel = new KelasModel();
        $this->daftarModel = new DaftarModel();
        $this->session= session();
    }
    public function index()
    {

        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        if($this->session->get('level')==0){
            return redirect()->to('/guru');
        }
        if($this->session->get('level')==2){
            return redirect()->to('/siswa');
        }
        $data = [
            'title' => 'Halaman Admin'
        ];
        return view('admin/index', $data);
        // echo 'Saya Rizka Akbar Syaukany';
        
    }
    public function update(){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        $data = [
            'title' => 'Update Data'
        ];
        return view('admin/update', $data);
    }
    public function update_siswa(){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        $data = [
            'title' => 'update_siswa'
        ];
        return view('admin/update_siswa',$data);
    }
    public function update_guru(){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        $data = [
            'title' => 'update_guru'
        ];
        return view('admin/update_guru',$data);
    }
    public function update_kelas(){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        $data = [
            'title' => 'update_kelas'
        ];
        return view('admin/update_kelas',$data);
    }
    public function tampilan(){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        $data = [
            'title' => 'Tampilan'
        ];
        return view('admin/tampilan',$data);
    }
    public function tampilan_siswa($id_kelas){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        $data = [
            'title' => 'Tampilan Siswa',
            'siswa' => $this->siswaModel->get_siswa($id_kelas)
        ];
        // dd($data);
        return view('admin/tampilan_siswa',$data);
        // echo $id_kelas;
    }
    public function tampilan_guru(){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        $data = [
            'title' => 'Tampilan Guru',
            'guru' => $this->guruModel->get_guru()
        ];
        // dd($data);
        return view('admin/tampilan_guru',$data);
    }
    public function tampilan_kelas(){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        $data = [
            'title' => 'Tampilan Kelas',
            'kelas' => $this->siswaModel->get_kelas()
            
        ];
      
        return view('admin/tampilan_kelas',$data);
    }
    public function detail_siswa($id_user){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        $data = [
            'title' => 'Detail Siswa',
            'detail' => $this->siswaModel->detailSiswa($id_user)
            
        ];
        // dd($data);
        return view('admin/detail_siswa',$data);
    }
    public function detail_guru($id_user){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        $data = [
            'title' => 'Detail Guru',
            'detail'=> $this->guruModel->d_guru($id_user)
        ];
        // dd($data);
        return view('admin/detail_guru',$data);
    }
    public function  admin(){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        $data = [
            'title' => 'Detail Admin',
            'admin'=> $this->adminModel->get_admin()
        ];
        // dd($data);
        return view('admin/tampilan_admin',$data);
    }
    public function detail_admin($id_user){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        $data = [
            'title'=> 'Detail Admmin',
            'detail'=> $this->adminModel->get_admin($id_user)
        ];
        // dd($data);
        return view('admin/detail_admin',$data);
    }
    public function add_guru(){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        $data = [
            'title'=> 'Tambah guru',
            'validation'=> \Config\Services::validation()
        ];
        return view('admin/add_guru',$data);
    }
    public function add_admin(){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        $data = [
            'title'=> 'Tambah Admin',
            'validationAdmin'=> \Config\Services::validation()
        ];
        // dd($data);
        return view('admin/add_admin',$data);
    }
    public function add_siswa(){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        $data = [
            'title'=> 'Tambah siswa',
            'kelas'=> $this->kelasModel->kelasa(),
            'validationSiswa'=> \Config\Services::validation()
        ];
        //  dd($data);
        return view('admin/add_siswa',$data);
    }
    public function updateSiswa($id_siswa='' ){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        $data = [
            'title'=> 'Form Ubah Siswa',
            'kelas'=> $this->kelasModel->kelas($id_siswa),
            'kelasa'=>$this->kelasModel->kelasa(),
            'siswa'=> $this->userModel->siswa($id_siswa),
            'daftar'=>$this->daftarModel->daftar($id_siswa),
            'validationSiswa'=> \Config\Services::validation()
        ];
        // dd($data);
        return view('admin/update_siswa',$data);

    }
    public function updateAdmin($id_user){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        $data = [
            'title'=> 'update data admin',
            'admin'=> $this->userModel->admin($id_user),
            'validationAdmin'=> \Config\Services::validation()
        ];
        return view('admin/update_admin',$data);
    }
    public function updateGuru($id_user){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        $data = [
            'title'=> 'update data guru',
            'guru'=> $this->userModel->guru($id_user),
            'validationGuru'=> \Config\Services::validation()
        ];
        return view('admin/update_guru',$data);
    }
    public function delete($id_user){
        $this->userModel->delete($id_user);
        session()->setFlashdata('pesan','Behasil menghapus data.');
        return redirect()->to('/admin/admin');
    }
    public function deleteGuru($id_user){
        $this->userModel->delete($id_user);
        session()->setFlashdata('pesan','Behasil menghapus data.');
        return redirect()->to('/admin/tampilan_guru');
    }
    public function delete_daftar($id_user){
        $this->userModel->delete($id_user);
        $this->daftarModel->delete($id_user);
        session()->setFlashdata('pesan','Behasil menghapus data siswa');
        // return redirect()->to('/admin/tampilan/siswa');
        return redirect()->to('/admin/tampilan_kelas');
    }
    
    public function save(){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        //validasi
        if(!$this->validate([
            'nama_user'=>[
                'rules'=> 'required',
                'errors'=>[
                    'required' =>'Nama harus diisi !'
                ]
            ],
            'nip'=>[
                'rules'=>'required|is_unique[user.NIP]',
                'errors'=>[
                    'required'=>'Nomer Induk harus diisi !',
                    'is_unique'=>'Nomer Induk telah tersedia'
                ]
                ],
            'telp_user'=>[
                'rules'=>'required|is_unique[user.telp_user]',
                'errors'=>[
                    'required'=>'Nomer Telpon Belum di Isi !',
                    'is_unique'=>'Nomer Telpon telah tersedia'
                ]
                ],
                'email_user'=>[
                    'rules'=>'required',
                    'errors'=>[
                        'required'=>'Email Belum Di isi !'
                    ]
                    ],
                'password'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Silahkan masukan password !'
                ]
                ],
                'alamat'=>[
                    'rules'=>'required',
                    'errors'=>[
                        'required'=>'Silahkan masukan alamat !'
                    ]
                    ],
                'profile_user'=>[
                    'rules'=>'is_image[profile_user]|mime_in[profile_user,image/jpg,image/jpeg,image/png|max_size[profile_user,2048]',
                    'errors'=>[
                        // 'uploaded'=>'File belum di upload',
                        'max_size'=>'Ukura gambar lebih besar dari 2 MB, silahkan pilih file lain',
                        'is_image'=>'File yang anda Upload bukan gambar',
                        'mime_in'=>'File yang anda Upload bukan gambar'
                    ]
                    ]
      
        ]))
        {
            // $validation = \Config\Services::validation();
            // dd($validation);
            // return redirect()->to('admin/add_guru')->withInput()->with('validation',$validation);
            return redirect()->to('admin/add_guru')->withInput();
        }
        //ambil gambar
        $profile = $this->request->getFile('profile_user');
        if($profile->getError() == 4){
            $namaProfile = 'default.png';
        }else{
            // dd($profile);
            //pindah file ke img
            $namaProfile =$profile->getName();
            $profile->move('img',$namaProfile);
            //ambil nama file
            // $profile->move('img',$namaProfile);
        }

        //memasukan data ke database
        $this->userModel->save([
            'nama_user' => $this->request->getVar('nama_user'),
            'NIP' => $this->request->getVar('nip'),
            'alamat_user' => $this->request->getVar('alamat'),
            'jenis_kelamin'=> $this->request->getVar('jenis_kelamin'),
            'email_user' => $this->request->getVar('email_user'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'telp_user' => $this->request->getVar('telp_user'),
            'profile_user' => $namaProfile,
            'level' => 0
        ]);
        session()->setFlashdata('pesan','Behasil menambahkan data guru.');
        return redirect()->to('/admin/tampilan_guru');
    }
    public function saveAdmin(){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        //validasi
        if(!$this->validate([
            'nama_user'=>[
                'rules'=> 'required',
                'errors'=>[
                    'required' =>'Nama harus diisi !'
                ]
            ],
            'nip'=>[
                'rules'=>'required|is_unique[user.NIP]',
                'errors'=>[
                    'required'=>'Nomer Induk harus diisi !',
                    'is_unique'=>'Nomer Induk telah tersedia'
                ]
                ],
            'telp_user'=>[
                'rules'=>'required|is_unique[user.telp_user]',
                'errors'=>[
                    'required'=>'Nomer Telpon Belum di Isi !',
                    'is_unique'=>'Nomer Telpon telah tersedia'
                ]
                ],
                'email_user'=>[
                    'rules'=>'required',
                    'errors'=>[
                        'required'=>'Email Belum Di isi !'
                    ]
                    ],
                'password'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Silahkan masukan password !'
                ]
                ],
                'alamat'=>[
                    'rules'=>'required',
                    'errors'=>[
                        'required'=>'Silahkan masukan alamat !'
                    ]
                    ],
                'profile_user'=>[
                    'rules'=>'is_image[profile_user]|mime_in[profile_user,image/jpg,image/jpeg,image/png|max_size[profile_user,2048]',
                    'errors'=>[
                        // 'uploaded'=>'File belum di upload',
                        'max_size'=>'Ukura gambar lebih besar dari 2 MB, silahkan pilih file lain',
                        'is_image'=>'File yang anda Upload bukan gambar',
                        'mime_in'=>'File yang anda Upload bukan gambar'
                    ]
                    ]
      
        ]))
        {
            // $validation = \Config\Services::validation();
            // dd($validation);
            // return redirect()->to('admin/add_guru')->withInput()->with('validation',$validation);
            return redirect()->to('admin/add_admin')->withInput();
        }
        //ambil gambar
        $profile = $this->request->getFile('profile_user');
        if($profile->getError() == 4){
            $namaProfile = 'default.png';
        }else{
            // dd($profile);
            //pindah file ke img
            $namaProfile =$profile->getName();
            $profile->move('img',$namaProfile);
            //ambil nama file
            // $profile->move('img',$namaProfile);
        }
        //memasukan data ke database
        $this->userModel->save([
            'nama_user' => $this->request->getVar('nama_user'),
            'NIP' => $this->request->getVar('nip'),
            'alamat_user' => $this->request->getVar('alamat'),
            'jenis_kelamin'=> $this->request->getVar('jenis_kelamin'),
            'email_user' => $this->request->getVar('email_user'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'telp_user' => $this->request->getVar('telp_user'),
            'profile_user' => $namaProfile,
            'level' => 1
        ]);
        session()->setFlashdata('pesan','Behasil menambahkan data Admin.');
        return redirect()->to('/admin/admin');
    }
    public function saveSiswa(){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        //validasi
        if(!$this->validate([
            'nama_user'=>[
                'rules'=> 'required',
                'errors'=>[
                    'required' =>'Nama harus diisi !'
                ]
            ],
            'nip'=>[
                'rules'=>'required|is_unique[user.NIP]',
                'errors'=>[
                    'required'=>'Nomer Induk harus diisi !',
                    'is_unique'=>'Nomer Induk telah tersedia'
                ]
                ],
            'telp_user'=>[
                'rules'=>'required|is_unique[user.telp_user]',
                'errors'=>[
                    'required'=>'Nomer Telpon Belum di Isi !',
                    'is_unique'=>'Nomer Telpon telah tersedia'
                ]
                ],
                'email_user'=>[
                    'rules'=>'required',
                    'errors'=>[
                        'required'=>'Email Belum Di isi !'
                    ]
                    ],
                'password'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Silahkan masukan password !'
                ]
                ],
                'alamat'=>[
                    'rules'=>'required',
                    'errors'=>[
                        'required'=>'Silahkan masukan alamat !'
                    ]
                    ],
                'profile_user'=>[
                    'rules'=>'is_image[profile_user]|mime_in[profile_user,image/jpg,image/jpeg,image/png|max_size[profile_user,2048]',
                    'errors'=>[
                        // 'uploaded'=>'File belum di upload',
                        'max_size'=>'Ukura gambar lebih besar dari 2 MB, silahkan pilih file lain',
                        'is_image'=>'File yang anda Upload bukan gambar',
                        'mime_in'=>'File yang anda Upload bukan gambar'
                    ]
                    ]
      
        ]))
        {
            // $validation = \Config\Services::validation();
            // dd($validation);
            // return redirect()->to('admin/add_guru')->withInput()->with('validation',$validation);
            return redirect()->to('admin/add_siswa')->withInput();
        }
        //ambil gambar
        $profile = $this->request->getFile('profile_user');
        //pengecekan gambar apakah ada atau tidak
        if($profile->getError() == 4){
            $namaProfile = 'default.png';
        }else{
            // dd($profile);
            //pindah file ke img
            $namaProfile =$profile->getName();
            $profile->move('img',$namaProfile);
            //ambil nama file
            // $profile->move('img',$namaProfile);
        }

        //memasukan data ke database
        // dd($this->request->getVar('kelas'));
        $this->userModel->insert([
            'nama_user' => $this->request->getVar('nama_user'),
            'NIP' => $this->request->getVar('nip'),
            'alamat_user' => $this->request->getVar('alamat'),
            'jenis_kelamin'=> $this->request->getVar('jenis_kelamin'),
            'email_user' => $this->request->getVar('email_user'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'telp_user' => $this->request->getVar('telp_user'),
            'profile_user' => $namaProfile,
            'level' => 2
        ]);
        $userId = $this->userModel->insertID();
        $daftar=[
            'id_kelas'=>$this->request->getGetPost('kelas'),
            'id_user'=>$userId
        ];
        $this->daftarModel->insert($daftar);
        
        // dd($this->daftarModel);
        session()->setFlashdata('pesan','Behasil menambahkan data Siswa.');
        
        return redirect()->to('admin/tampilan_kelas');    
    }
    public function editSiswa($id_user){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        // dd($this->request->getVar());
        //cek data lama
        $daftarAll = $this->daftarModel->daftar($id_user);
        $id_daftar = $daftarAll->id_daftar_siswa;
        // dd($id_daftar);
        $dataLama= $this->userModel->siswa($id_user);
        //  dd($dataLama);
        $id_siswa = $id_user;
        // dd($id_siswa);
        $this->updateSiswa($id_siswa);
        // dd($id_user);
        //vaalidasi data nip
        if ($dataLama->NIP== $this->request->getVar('nip')){
            $nip = 'required';
        }
        else{
            $nip = 'required|is_unique[user.NIP]';
        }
        // validasi data no telp
        if ($dataLama->telp_user == $this->request->getVar('telp_user')){
            $telp = 'required';
        }else{
            $telp = 'required|is_unique[user.telp_user]';
        }
        // dd($nip);
        if(!$this->validate([
            'nama_user'=>[
                'rules'=> 'required',
                'errors'=>[
                    'required' =>'Nama harus diisi !'
                ]
            ],
            'nip'=>[
                'rules'=>$nip,
                'errors'=>[
                    'required'=>'Nomer Induk harus diisi !',
                    'is_unique'=>'Nomer Induk telah tersedia'
                ]
                ],
            'telp_user'=>[
                'rules'=>$telp,
                'errors'=>[
                    'required'=>'Nomer Telpon Belum di Isi !',
                    'is_unique'=>'Nomer Telpon telah tersedia'
                ]
                ],
                'email_user'=>[
                    'rules'=>'required',
                    'errors'=>[
                        'required'=>'Email Belum Di isi !'
                    ]
                    ],
                'password'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Silahkan masukan password !'
                ]
                ],
                'alamat'=>[
                    'rules'=>'required',
                    'errors'=>[
                        'required'=>'Silahkan masukan alamat !'
                    ]
                    ],
                'profile_user'=>[
                    'rules'=>'is_image[profile_user]|mime_in[profile_user,image/jpg,image/jpeg,image/png|max_size[profile_user,2048]',
                    'errors'=>[
                        // 'uploaded'=>'File belum di upload',
                        'max_size'=>'Ukura gambar lebih besar dari 2 MB, silahkan pilih file lain',
                        'is_image'=>'File yang anda Upload bukan gambar',
                        'mime_in'=>'File yang anda Upload bukan gambar'
                    ]
                    ]
      
        ]))
        {
            // $validation = \Config\Services::validation();
            // dd($validation);
            // return redirect()->to('admin/add_guru')->withInput()->with('validation',$validation);
            return redirect()->to('admin/updateSiswa/'.$id_siswa)->withInput();
        }
        //ambil gambar
        $profile = $this->request->getFile('profile_user');
        //pengecekan gambar apakah ada atau tidak
        if($profile->getError() == 4){
            $namaProfile = 'default.png';
        }else{
            // dd($profile);
            //pindah file ke img
            $namaProfile =$profile->getName();
            $profile->move('img',$namaProfile);
            //ambil nama file
            // $profile->move('img',$namaProfile);
        }

        //memasukan data ke database
        // dd($this->request->getVar('kelas'));
        $this->userModel->save([
            'id_user' =>$id_user,
            'nama_user' => $this->request->getVar('nama_user'),
            'NIP' => $this->request->getVar('nip'),
            'alamat_user' => $this->request->getVar('alamat'),
            'jenis_kelamin'=> $this->request->getVar('jenis_kelamin'),
            'email_user' => $this->request->getVar('email_user'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'telp_user' => $this->request->getVar('telp_user'),
            'profile_user' => $namaProfile,
            'level' => 2
        ]);
        // $userId = $this->userModel->insertID();
        $daftar=[
            'id_daftar_siswa'=>$id_daftar,
            'id_kelas'=>$this->request->getGetPost('kelas'),
            'id_user'=>$id_user
        ];
        $this->daftarModel->save($daftar);
        
        // dd($this->daftarModel);
        session()->setFlashdata('pesan','Behasil mengubah data Siswa.');
        
        return redirect()->to('admin/tampilan_kelas');   
    }
    public function editAdmin($id_user){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        // dd($this->request->getVar());
        //cek data lama
        // dd($id_daftar);
        $dataLama= $this->userModel->siswa($id_user);
        //  dd($dataLama);
        $id_siswa = $id_user;
        // dd($id_siswa);
        $this->updateSiswa($id_siswa);
        // dd($id_user);
        //vaalidasi data nip
        if ($dataLama->NIP== $this->request->getVar('nip')){
            $nip = 'required';
        }
        else{
            $nip = 'required|is_unique[user.NIP]';
        }
        // validasi data no telp
        if ($dataLama->telp_user == $this->request->getVar('telp_user')){
            $telp = 'required';
        }else{
            $telp = 'required|is_unique[user.telp_user]';
        }
        // dd($nip);
        if(!$this->validate([
            'nama_user'=>[
                'rules'=> 'required',
                'errors'=>[
                    'required' =>'Nama harus diisi !'
                ]
            ],
            'nip'=>[
                'rules'=>$nip,
                'errors'=>[
                    'required'=>'Nomer Induk harus diisi !',
                    'is_unique'=>'Nomer Induk telah tersedia'
                ]
                ],
            'telp_user'=>[
                'rules'=>$telp,
                'errors'=>[
                    'required'=>'Nomer Telpon Belum di Isi !',
                    'is_unique'=>'Nomer Telpon telah tersedia'
                ]
                ],
                'email_user'=>[
                    'rules'=>'required',
                    'errors'=>[
                        'required'=>'Email Belum Di isi !'
                    ]
                    ],
                'password'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Silahkan masukan password !'
                ]
                ],
                'alamat'=>[
                    'rules'=>'required',
                    'errors'=>[
                        'required'=>'Silahkan masukan alamat !'
                    ]
                    ],
                'profile_user'=>[
                    'rules'=>'is_image[profile_user]|mime_in[profile_user,image/jpg,image/jpeg,image/png|max_size[profile_user,2048]',
                    'errors'=>[
                        // 'uploaded'=>'File belum di upload',
                        'max_size'=>'Ukura gambar lebih besar dari 2 MB, silahkan pilih file lain',
                        'is_image'=>'File yang anda Upload bukan gambar',
                        'mime_in'=>'File yang anda Upload bukan gambar'
                    ]
                    ]
      
        ]))
        {
            // $validation = \Config\Services::validation();
            // dd($validation);
            // return redirect()->to('admin/add_guru')->withInput()->with('validation',$validation);
            return redirect()->to('admin/updateAdmin/'.$id_siswa)->withInput();
        }
        //ambil gambar
        $profile = $this->request->getFile('profile_user');
        //pengecekan gambar apakah ada atau tidak
        if($profile->getError() == 4){
            $namaProfile = 'default.png';
        }else{
            // dd($profile);
            //pindah file ke img
            $namaProfile =$profile->getName();
            $profile->move('img',$namaProfile);
            //ambil nama file
            // $profile->move('img',$namaProfile);
        }

        //memasukan data ke database
        //  dd($this->request->getVar());
        $this->userModel->save([
            'id_user' =>$id_user,
            'nama_user' => $this->request->getVar('nama_user'),
            'NIP' => $this->request->getVar('nip'),
            'alamat_user' => $this->request->getVar('alamat'),
            'jenis_kelamin'=> $this->request->getVar('jenis_kelamin'),
            'email_user' => $this->request->getVar('email_user'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'telp_user' => $this->request->getVar('telp_user'),
            'profile_user' => $namaProfile,
            'level' => 1
        ]);
        // $userId = $this->userModel->insertID();
        
        // dd($this->daftarModel);
        session()->setFlashdata('pesan','Behasil mengubah data admin.');
        
        return redirect()->to('/admin/admin');   
    }
    public function editguru($id_user){
        if(!$this->session->has('isLogin')){
            return redirect()->to('/lms/login');
        }
        // dd($this->request->getVar());
        //cek data lama
        // dd($id_daftar);
        $dataLama= $this->userModel->siswa($id_user);
        //  dd($dataLama);
        $id_siswa = $id_user;
        // dd($id_siswa);
        $this->updateSiswa($id_siswa);
        // dd($id_user);
        //vaalidasi data nip
        if ($dataLama->NIP== $this->request->getVar('nip')){
            $nip = 'required';
        }
        else{
            $nip = 'required|is_unique[user.NIP]';
        }
        // validasi data no telp
        if ($dataLama->telp_user == $this->request->getVar('telp_user')){
            $telp = 'required';
        }else{
            $telp = 'required|is_unique[user.telp_user]';
        }
        // dd($nip);
        if(!$this->validate([
            'nama_user'=>[
                'rules'=> 'required',
                'errors'=>[
                    'required' =>'Nama harus diisi !'
                ]
            ],
            'nip'=>[
                'rules'=>$nip,
                'errors'=>[
                    'required'=>'Nomer Induk harus diisi !',
                    'is_unique'=>'Nomer Induk telah tersedia'
                ]
                ],
            'telp_user'=>[
                'rules'=>$telp,
                'errors'=>[
                    'required'=>'Nomer Telpon Belum di Isi !',
                    'is_unique'=>'Nomer Telpon telah tersedia'
                ]
                ],
                'email_user'=>[
                    'rules'=>'required',
                    'errors'=>[
                        'required'=>'Email Belum Di isi !'
                    ]
                    ],
                'password'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Silahkan masukan password !'
                ]
                ],
                'alamat'=>[
                    'rules'=>'required',
                    'errors'=>[
                        'required'=>'Silahkan masukan alamat !'
                    ]
                    ],
                'profile_user'=>[
                    'rules'=>'is_image[profile_user]|mime_in[profile_user,image/jpg,image/jpeg,image/png|max_size[profile_user,2048]',
                    'errors'=>[
                        // 'uploaded'=>'File belum di upload',
                        'max_size'=>'Ukura gambar lebih besar dari 2 MB, silahkan pilih file lain',
                        'is_image'=>'File yang anda Upload bukan gambar',
                        'mime_in'=>'File yang anda Upload bukan gambar'
                    ]
                    ]
      
        ]))
        {
            // $validation = \Config\Services::validation();
            // dd($validation);
            // return redirect()->to('admin/add_guru')->withInput()->with('validation',$validation);
            return redirect()->to('admin/updateGuru/'.$id_siswa)->withInput();
        }
        //ambil gambar
        $profile = $this->request->getFile('profile_user');
        //pengecekan gambar apakah ada atau tidak
        if($profile->getError() == 4){
            $namaProfile = 'default.png';
        }else{
            // dd($profile);
            //pindah file ke img
            $namaProfile =$profile->getName();
            $profile->move('img',$namaProfile);
            //ambil nama file
            // $profile->move('img',$namaProfile);
        }

        //memasukan data ke database
        //  dd($this->request->getVar());
        $this->userModel->save([
            'id_user' =>$id_user,
            'nama_user' => $this->request->getVar('nama_user'),
            'NIP' => $this->request->getVar('nip'),
            'alamat_user' => $this->request->getVar('alamat'),
            'jenis_kelamin'=> $this->request->getVar('jenis_kelamin'),
            'email_user' => $this->request->getVar('email_user'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'telp_user' => $this->request->getVar('telp_user'),
            'profile_user' => $namaProfile,
            'level' => 0
        ]);
        // $userId = $this->userModel->insertID();
        
        // dd($this->daftarModel);
        session()->setFlashdata('pesan','Behasil mengubah data guru.');
        
        return redirect()->to('/admin/tampilan_guru');   
    }
}