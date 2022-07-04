<?php

namespace App\Controllers;
use App\Models\Jenis_perizinanModel;
use App\Models\Tabel_perizinanModel;

class Home extends BaseController
{
    protected $Jenis_perizinanModel;
    protected $Tabel_perizinanModel;
    public function __construct()
    {
        $this->Jenis_perizinanModel = new Jenis_perizinanModel();
        $this->Tabel_perizinanModel = new Tabel_perizinanModel();
    }
    public function index()
    {
        echo view('dashboard');
    }
    public function input()
    {
        $izin = $this->Jenis_perizinanModel->findAll();
        $dataperizinan = $this->Tabel_perizinanModel->findAll();
        $data = [
            'izin'=> $izin,
            'dataperizinan'=>$dataperizinan
        ];
        echo view('input',$data);
    }
    public function search()
    {
        $izin = $this->Jenis_perizinanModel->findAll();
        $dataperizinan = $this->Tabel_perizinanModel->findAll();
        $data = [
            'izin'=> $izin,
            'dataperizinan'=>$dataperizinan
        ];
        echo view('search',$data);
    }
}