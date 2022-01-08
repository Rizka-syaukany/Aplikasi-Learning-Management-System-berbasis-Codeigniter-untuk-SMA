<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    protected $returnType = 'object';
    protected $allowedFields = [
        'nama_Kelas'
    ];
    public function kelas($id_siswa){
        return $this->join('daftar_siswa','daftar_siswa.id_kelas = kelas.id_kelas')
        ->where('daftar_siswa.id_user',$id_siswa)
        ->get()->getResultArray();
    }
    public function kelasa(){
        return $this->get()->getResultArray();
    }
    
}