<?php

namespace App\Controllers;

class Liste extends BaseController
{
    public function index()
    {
        
        echo view('entete');
        echo view('header');
        echo view('menu');
        echo view('liste');
        return view('footer');
    }


}
