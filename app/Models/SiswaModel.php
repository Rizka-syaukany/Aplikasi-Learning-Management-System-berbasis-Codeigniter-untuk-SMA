<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table      = 'daftar_siswa';
    protected $primaryKey = 'id_daftar_siswa';

    public function get_siswa(){
        return $this->db->table('daftar_siswa')
        ->join('kelas','kelas.id_kelas = daftar_siswa.id_kelas')
        ->join('user','.user.id_user = daftar_siswa.id_user')
        ->get()->getResultArray();
    }
}