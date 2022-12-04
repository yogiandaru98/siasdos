<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MataKuliahController extends BaseController
{
    public function __construct()
    {
        $this->modelMk = new \App\Models\MataKuliah();
    }
    public function index()
    {
        //
        $data = [
            'title' => 'Mata Kuliah',
            'mata_kuliah' => $this->modelMk->findAll(),
        ];
        return view('page/admin/mataKuliah/read', $data);
    }
    public function create(){
        $data = [
            'title' => 'Tambah Mata Kuliah',
        ];
        return view('page/admin/mataKuliah/create', $data);
    }
    public function store(){
        $data = [
            'nama_mk' => $this->request->getPost('nama_mk'),
            'semester' => $this->request->getPost('semester'),
            'status' => $this->request->getPost('status'),
        ];
        $this->modelMk->insert($data);
        return redirect()->to('/mata_kuliah');
    }

    public function edit($id){
        $data = [
            'title' => 'Edit Mata Kuliah',
            'mata_kuliah' => $this->modelMk->where('id_mk', $id)->first(),
        ];
        return view('page/admin/mataKuliah/edit', $data);
    }
    public function update(){
        $data = [
            'nama_mk' => $this->request->getPost('nama_mk'),
            'semester' => $this->request->getPost('semester'),
            'status' => $this->request->getPost('status'),
        ];
        $id = $this->request->getPost('id_mk');
        $this->modelMk->where('id_mk', $id)->set($data)->update();
        return redirect()->to('/mata_kuliah');
    }
    public function delete($id){
        $this->modelMk->where('id_mk', $id)->delete();
        return redirect()->to('/mata_kuliah');
    }
    
}
