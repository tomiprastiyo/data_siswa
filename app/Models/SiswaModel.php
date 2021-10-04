<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = "Siswa";
    protected $primaryKey = "NIS";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ['NIS', 'NAMA', 'ALAMAT'];
}