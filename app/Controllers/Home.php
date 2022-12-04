<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if(session()->get('logged_in')){
            return view('page/global/dashboard');
        }
        return redirect()->to(base_url('/login'));
    }
    public function login(){
        if(session()->get('logged_in')){
            return redirect()->back();
        }
        return view('auth/login_or_regis');
    }
}
