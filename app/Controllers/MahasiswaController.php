<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MahasiswaController extends BaseController
{
    public function __construct()
    {
        $this->modelMhs = new \App\Models\Users();
        $this->daftar = new \App\Models\Pendaftaran();
        $this->mataKuliah = new \App\Models\MataKuliah();
        
    }
    public function index()
    {
        //
        $data = [
            'title' => 'Pendaftaran Asisten Dosen',
            'pendaftaran' => $this->daftar->where('id_user', session()->get('id'))->countAllResults(),
            'mata_kuliah' => $this->mataKuliah->where('status', 1)->findAll(),
        ];

        return view('page/mahasiswa/pendaftaran', $data);
    }
    public function store(){
    
        $file = $this->request->getFile('file');
        $randomName = $file->getRandomName();
        $data = [
            'id_user' => session()->get('id'),
            'status' => 'diproses',
            'transkrip' => $randomName,
            'IPK' => $this->request->getPost('ipk'),
            'kelas' => $this->request->getPost('kelas'),
            'semester' => $this->request->getPost('semester'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $file->move('../public/uploads', $randomName);
        for($i = 1 ; $i <= 3;$i++){
            $data['id_mk'] = $this->request->getPost('pilihan'.$i);
            $this->daftar->insert($data);
        }
        session()->setFlashdata('success', 'Pendaftaran berhasil');
        return redirect()->to('/pendaftaran');
    }
}
