<?php namespace App\Controllers;
use CodeIgniter\Conroller;
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
        dd($izin);
        return view('cobadata/index');
    }
}
