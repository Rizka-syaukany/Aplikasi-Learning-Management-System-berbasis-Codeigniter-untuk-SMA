<?php

namespace App\Models;

use CodeIgniter\Model;

class USER extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $returnType = 'object';
    protected $allowedFields = [
        'nama_user',
        'email_user',
        'password',
        'level',
        'NIP',
        'jenis_kelamin',
        'telp_user',
        'profile_user',
        'alamat_user'
    ];
    public function siswa($id_user){
        return $this->where(['id_user'=>$id_user])->first();
    }
    public function admin($id_user){
        return $this->where(['id_user'=>$id_user])->first();
    }
    public function guru($id_user){
        return $this->where(['id_user'=>$id_user])->first();
    }
}