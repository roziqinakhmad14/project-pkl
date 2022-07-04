<?php namespace App\Controllers;
use App\Models\Jenis_perizinanModel;

class JenisPerizinan extends BaseController
{
    protected $Jenis_perizinanModel;
    public function __construct()
    {
        $this->Jenis_perizinanModel = new Jenis_perizinanModel();
    }
    
    public function index()
    {
        $izin = $this->Jenis_perizinanModel->findAll();
        echo view('cobadata/index');
    }
}
