<?php

namespace App\Controllers;


use App\Models\logincontroModel;
use CodeIgniter\RESTful\ResourceController; // เรียกใช้API
use CodeIgniter\HTTP\RequestTrait; // เรียกใช้API


class logincontro extends ResourceController // เปลี่ยนจาก Controller
{
    use RequestTrait; // เรียกใช้

    public function index()
    {
        helper('form');
        echo view('login');
    }
    public function index2()
    {
        helper('form');
        echo view('register');
    }

    public function register()
    {
    
        $rules = [
            'userName' => 'required|min_length[6]|max_length[20]',
            'password' => 'required|min_length[6]|max_length[20]',
        ];
        if($this->validate($rules)){
            $model = new logincontroModel();
            $data = [
                'userName' => $this->request->getVar('userName'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
                'FName' => $this->request->getVar('FName'),
                'LName' => $this->request->getVar('LName'),
                'gender' => $this->request->getVar('gender'),
                'phoneNumber' => $this->request->getVar('phoneNumber'),
                'offImage' => $this->request->getVar('offImage'),
             ];
             
             
            if($data){
                 $register = $model->register($data);
                 return redirect()->to('/');
            }
            }else{
                 $data['validation'] = $this->validator;
                 echo view('register',$data);
             }
    }

    public function login()
    {
        $session = session();
        $model = new logincontroModel();
        $userName = $this->request->getVar('userName');
        $password = $this->request->getVar('password');
        $data = $model->login($userName, $password);
        if ($data) {
            $session->set($data);
            return redirect()->to('/home');
        } else {
            $session->setFlashdata('msg', 'ไม่สามารถเข้าสู่ระบบได้ !!!');
            return redirect()->to('/');
        }
    }


}