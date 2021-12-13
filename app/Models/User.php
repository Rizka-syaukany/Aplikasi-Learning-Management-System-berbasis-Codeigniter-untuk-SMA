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
        'level'
    ];
}
