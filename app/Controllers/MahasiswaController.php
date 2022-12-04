<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MahasiswaController extends BaseController
{
    public function __construct()
    {
        $users = $this->modelMhs = new \App\Models\Users();
        $pendaftaran = $this->daftar = new \App\Models\Pendaftaran();
        
    }
    public function index()
    {
        //
        $data = [
            'title' => 'Pendaftaran Asisten Dosen',
            'pendaftaran' => $this->daftar->where('id_user', session()->get('id'))->countAllResults(),
        ];

        return view('page/mahasiswa/pendaftaran', $data);
    }
}
