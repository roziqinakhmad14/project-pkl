<?php

namespace App\Controllers;
use App\Models\Jenis_perizinanModel;

class Home extends BaseController
{
    protected $Jenis_perizinanModel;
    public function __construct()
    {
        $this->Jenis_perizinanModel = new Jenis_perizinanModel();
    }
    public function index()
    {
        echo view('dashboard');
    }
    public function input()
    {
        $izin = $this->Jenis_perizinanModel->findAll();
        $data = [
            'izin'=> $izin
        ];
        echo view('input',$data);
    }
    public function search()
    {
        $izin = $this->Jenis_perizinanModel->findAll();
        $data = [
            'izin'=> $izin
        ];
        echo view('search',$data);
    }
}