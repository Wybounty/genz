<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('entete');
        echo view('home');
        return view('footer');
    }
}
