<?php

namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\HTTP\Request;
use CodeIgniter\Controller;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'dashboard',
            'isi' => 'user/dashboard'
        ];
        return view('layout/template', $data);
    }
}
