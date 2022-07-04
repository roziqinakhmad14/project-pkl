<?php namespace App\Controllers;
use CodeIgniter\Conroller;
use App\Models\Tabel_perizinanModel;

class JenisPerizinan extends BaseController
{
    protected $Tabel_perizinanModel;
    public function __construct()
    {
        $this->Tabel_perizinanModel = new Tabel_perizinanModel();
    }
    
    public function index()
    {
        $izin = $this->Tabel_perizinanModel->findAll();
        dd($izin);
        return view('cobadata/index');
    }
}
