<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        $this->modelPengumuman = new \App\Models\Announcement();
    }
    public function index()
    {
        if(session()->get('logged_in')){
            $data = [
                'title' => 'Home',
                'pengumuman' => $this->modelPengumuman->findAll(),
            ];
            return view('page/global/dashboard',$data);
        }
        return redirect()->to(base_url('/login'));
    }
    public function login(){
        if(session()->get('logged_in')){
            return redirect()->back();
        }
        return view('auth/login_or_regis');
    }
    public function pengumuman(){
        return view('page/admin/pengumuman');
    }
    public function storePengumuman(){
        $data = [
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $this->modelPengumuman->insert($data);
        return redirect()->to(base_url('/'));
    }
}
