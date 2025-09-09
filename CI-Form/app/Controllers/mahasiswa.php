<?php

namespace App\Controllers;
use App\Models\mahasiswamodel;

class mahasiswa extends BaseController
{
    public function display()
    {
        $model = new mahasiswamodel();
        $data['mahasiswa'] = $model->getmahasiswa();
        return view ('mahasiswa_view', $data);
    }
}
