<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    // protected $table      = 'daftar_siswa';
    // protected $primaryKey = 'id_daftar_siswa';
    
    public function get_kelas(){
                
        // $db      = \Config\Database::connect();
        // $builder = $db->table('kelas');    
        // $query   = $builder->get();

        return $this->db->table('kelas')
        ->get()->getResultArray();
        // return $this->db->table('daftar_siswa')
        // ->join('kelas','kelas.id_kelas = daftar_siswa.id_kelas')
        // ->join('user','.user.id_user = daftar_siswa.id_user')
        // ->where('daftar_siswa.id_kelas')
        // ->get()->getResultArray();
        // $builder = $db->


    }
    public function get_siswa($id_kelas){
        return $this->db->table('daftar_siswa')
        ->join('kelas','kelas.id_kelas = daftar_siswa.id_kelas')
        ->join('user','.user.id_user = daftar_siswa.id_user')
        ->where('daftar_siswa.id_kelas',$id_kelas)
        ->get()->getResultArray();
         $this->where(['id_kelas'=> $id_kelas]);
    }
    public function detailSiswa($id_user){
        return $this->db->table('daftar_siswa')
        ->join('kelas','kelas.id_kelas = daftar_siswa.id_kelas')
        ->join('user','.user.id_user = daftar_siswa.id_user')
        ->where('daftar_siswa.id_user',$id_user)
        ->get()->getResultArray();
         $this->where(['id_user'=> $id_user])->first();
    }
}