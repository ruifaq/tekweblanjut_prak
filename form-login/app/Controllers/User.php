<?php
namespace App\Controllers;

use App\Models\M_User;
use App\Models\Login_User;

class User extends BaseController
{
    public function index(){
        $data = [
            'title' => 'Form Login',
            'tampil' => 'login',
        ];
        echo view('template/wrapper', $data);
    }

    public function register(){
        $data = [
            'title' => 'Form Register',
            'tampil' => 'register',
        ];
        echo view('template/wrapper', $data);
    }

    public function regis(){
        $userData = new Login_User();

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $userData->insert($_POST);
        $session = session();
        session()->setFlashdata('message','Selamat registrasi Berhasil!!!');
        return redirect()->to(site_url('user'));
    }

    #public function login(){
     #   $userData = new Login_User();

      #  $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

       # $userData->insert($_POST);
      
        #return redirect()->to(base_url('home'));
    #}


    
    public function login(){
        if($this->ada($_POST['email'],$_POST['password'])!=NULL) {

            $session=session();
            $session->set('email',$_POST['email']);
            return $this->response->redirect(site_url('home'));
        }else{
            session()->setFlashdata('msg','Email/Password Salah!!!!');
            return redirect()->to(site_url('user'));
        }
    }

    public function ada($email,$password){

        $Login_User=new LOGIN_USER();
        $user=$Login_User->where('email',$email)->first();
        if($user !=NULL)
        {
            if(password_verify($password,$user['password'])) {
                return $user;
            }
        }
    }

}

