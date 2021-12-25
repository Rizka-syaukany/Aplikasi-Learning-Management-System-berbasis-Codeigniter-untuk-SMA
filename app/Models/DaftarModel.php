<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarModel extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    protected $returnType = 'object';
    protected $allowedFields = [
        'id_kelas',
        'id_user'
    ];
}