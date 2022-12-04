<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('page/admin/dataPendaftar/edit_data_pendaftar.php');
    }
}
