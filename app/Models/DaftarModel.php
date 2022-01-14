<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarModel extends Model
{
    protected $table = 'daftar_siswa';
    protected $primaryKey = 'id_daftar_siswa';
    protected $returnType = 'object';
    protected $allowedFields = [
        'id_kelas',
        'id_user'
    ];
    public function daftar($id_user){
        return $this->where(['id_user'=>$id_user])->first();
    }
}