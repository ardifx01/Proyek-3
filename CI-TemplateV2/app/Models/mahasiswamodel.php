<?php

namespace App\Models;
use CodeIgniter\Model;

class mahasiswamodel extends Model
{
    protected $table = 'mahasiswa';

    public function getmahasiswa()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM mahasiswa');
        return $query->getResultArray();
    }
}
