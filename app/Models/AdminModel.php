<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
  
    public function get_admin($id_user = false){
        if($id_user == true ){
            return $this->db->table('user')
            ->where('level',1)
            ->where('user.id_user', $id_user)
            ->get()->getResultArray();
            $this->where(['id_user'=> $id_user]);
        }
        return $this->db->table('user')
        ->where('level',1)
        ->orderBy('nama_user','asc')
        ->get()->getResultArray();
    }
}