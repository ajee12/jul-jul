<?php

namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\HTTP\Request;
use CodeIgniter\Controller;

class Auth extends BaseController
{


    public function index()
    {
        $data = [
            'title' => 'Login'

        ];
        if ($this->request->getMethod() == 'post') {
            //let's do the validation here
            $rules = [

                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',

            ];
            $errors = [
                'password' => [
                    'validateUser' => 'email atau password salah'
                ]
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new LoginModel();

                $user = $model->where('email', $this->request->getVar('email'))
                    ->first();

                $this->userLogin($user);
                return redirect()->to('/user');
            }
        }



        return view('login', $data);
    }

    public function userLogin($user)
    {
        $data = [
            'id' => $user['id'],
            'fullname' => $user['fullname'],
            'email' => $user['email'],
            'password' => $user['password'],
            'isLoggedIn' => true
        ];
        session()->set($data);
    }

    public function registrasi()
    {
        $data = [
            'title' => 'Form Registrasi'
        ];

        helper(['form']);

        if ($this->request->getMethod() == 'post') {
            //let's do the validation here
            $rules = [

                'fullname' => 'required|min_length[3]|max_length[20]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]|max_length[255]',
                'password_confirm' => 'matches[password]',
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new LoginModel();

                $newData = [

                    'fullname' => $this->request->getVar('fullname'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Successful Registration');
                return redirect()->to('/');
            }
        }

        return view('/registrasi', $data);
    }
}
