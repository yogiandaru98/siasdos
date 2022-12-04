<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function __construct()
    {
        $this->modelUsers = new \App\Models\Users();
    }
    public function login()
    {
        $user = $this->modelUsers->where(['NPM' => $this->request->getPost('npm'), 'password' => $this->request->getPost('password')])->first();
        $data = [
            'title' => 'Login',   
        ];

        if ($user) {
            $sessionData = [
                'id' => $user['id_user'],
                'NPM' => $user['NPM'],
                'is_admin' => $user['is_admin'],
                'nama' => $user['nama'],
                'logged_in' => TRUE
            ];
            session()->set($sessionData);
            return redirect()->to(base_url('/'));
        } else {
            session()->setFlashdata('error', 'Username atau Password salah');
            return redirect()->to(base_url('/login'));
        }
        return view('auth/login', $data);
    }
    public function register(){
        $user = $this->modelUsers->where(['NPM' => $this->request->getPost('npm')])->first();
        if($user){
            session()->setFlashdata('error', 'NPM sudah terdaftar');
            return redirect()->to(base_url('/login'));
        }else{
            $data = [
                'NPM' => $this->request->getPost('npm'),
                'nama' => $this->request->getPost('nama'),
                'password' => $this->request->getPost('password'),
                'is_admin' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            $this->modelUsers->insert($data);
            session()->setFlashdata('success', 'Berhasil mendaftar');
            return redirect()->to(base_url('/login'));
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/login'));
    }
}
