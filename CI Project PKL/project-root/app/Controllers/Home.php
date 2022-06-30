<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('dasboard');
    }
    public function input()
    {
        echo view('input');
    }
    public function search()
    {
        echo view('search');
    }
}