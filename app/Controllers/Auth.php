<?php

namespace App\Controllers;

use App\Models\User;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->userModel = new User();
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
    }

    public function login(){

        return view('lms/login');
    }
    public function v_login(){
        $ambil= $this->request->getPost();
        $user = $this->userModel->where('email_user', $ambil['email_user'])->first();

        // dd($user);
        if ($user){
            if(password_verify($ambil['password'],$user->password)){
                $sessionLogin = [
                    'isLogin'=> true,
                    'email_user'=> $user->email_user,
                    'level'=> $user->level
                ];
                $this->session->set($sessionLogin);
                return redirect()->to('/admin');
            }else{
                return redirect()->back()->with('error', ' password salah');
            }

        }else{
            return redirect()->back()->with('error', 'email salah');
        }
    } 
    public function logout(){
        $this->session->destroy();
        return redirect()->to('/');
    }
    
}