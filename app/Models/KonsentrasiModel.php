<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $table = 'konsentrasi';
    protected $primaryKey = 'id_konsentrasi';
    protected $returnType = 'object';
}