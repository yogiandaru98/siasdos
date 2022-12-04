<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('page/admin/dataPendaftar/edit_data_pendaftar.php');
        // return view('page/global/dashboard');
        //  return view('page/admin/mataKuliah/read');
         return view('page/mahasiswa/pengumuman_asdos.php');
    }
}
