<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController; // เรียกใช้API
use CodeIgniter\HTTP\RequestTrait; // เรียกใช้API


class UserController extends ResourceController // เปลี่ยนจาก Controller
{
    use RequestTrait; // เรียกใช้
    public function index()
    {
        helper('form');
        echo view('home');
    }
   
    //Get all User
    public function viewUser()
    {
        helper('form');
        $model = new UserModel();
        $data['user'] = $model->viewUser();
        if ( $data['user']) {
            echo view('home', $data);
        }
         else{
             echo view('home');
         }
        
    }

    //Get  User by userId
    public function viewUser2($id)
    {
        $model = new UserModel();
        $data['user'] = $model->viewUser2($id);
        if ( $data['user']) {
            return view('dataUser', $data);
        }
         else{
             return view('dataUser');
         }
    }


    //update Status Success
    public function updateStatus($userId)
    {
        $status = "1";
        $data =[
            'statusUser' => $status
        ];
        $Usermodel = new UserModel();
        $Usermodel->where('userId', $userId)->set($data)->update();
        return redirect()->to('/home');
    }

    //update Status Fail
    public function updateStatusFail($userId)
    {
        $status = "2";
        $data =[
            'statusUser' => $status
        ];
        $Usermodel = new UserModel();
        $Usermodel->where('userId', $userId)->set($data)->update();
        return redirect()->to('/home');
    }
}
