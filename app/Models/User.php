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
}