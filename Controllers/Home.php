<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('/template/header');
        echo view('/page/home');
        echo view('/template/footer');
        
    }

    public function pesan()
    {

        echo view('/template/header2');
        echo view('/page/pesan');
    }

    public function register()
    {

        echo view('/page/register');
    }

    public function login()
    {

        echo view('/page/login');
    }
}
