<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function __construct()
    {
        $this->modelPendaftar = new \App\Models\Pendaftaran();
    }
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'pendaftar' => $this->modelPendaftar->getPendaftar()->getResultArray(),
        ];

        return view('page/admin/dataPendaftar/data_pendaftar',$data);
    }
    public function view($id){
        $data = [
            'title' => 'Detail',
            'pendaftar' => $this->modelPendaftar->getDetailPendaftar($id)->getResultArray(),
        ];

        return view('page/admin/dataPendaftar/detail_data_pendaftar',$data);
    }
    public function edit($id){
        $data = [
            'title' => 'Detail',
            'pendaftar' => $this->modelPendaftar->getDetailPendaftar($id)->getResultArray(),
        ];

        return view('page/admin/dataPendaftar/edit_data_pendaftar',$data);
    }
    public function delete($id){
        $this->modelPendaftar->where(['id_user' => $id])->delete();
        return redirect()->back();
    }
}
