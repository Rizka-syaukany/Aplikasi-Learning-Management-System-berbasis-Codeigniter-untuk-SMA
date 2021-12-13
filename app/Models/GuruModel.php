<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
    public function get_guru(){
        return $this->db->table('user')
        ->where('level',0)
        ->orderBy('nama_user','asc')
        ->get()->getResultArray();
    }
    public function detail_guru($id_user){
        return $this->db->table('jadwal_pengajaran')
        ->join('kelas','kelas.id_kelas = jadwal_pengajaran.id_kelas')
        ->join('user','user.id_user = jadwal_pengajaran.id_user')
        ->where('jadwal_pengajaran.id_user', $id_user)
        ->get()->getResultArray();
        $this->where(['id_user'=>$id_user]);
    }
}