<?php

namespace App\Controllers;
use App\Models\Jenis_perizinanModel;
use App\Models\Tabel_perizinanModel;
use CodeIgniter\HTTP\Request;

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
        $dataperizinan = $this->Tabel_perizinanModel->getAll();
        $data = [
            'izin'=> $izin,
            'dataperizinan'=>$dataperizinan
        ];
        echo view('search',$data);
    }
    public function save()
    {
        $this->Tabel_perizinanModel->insert([
            'id'=> $this->request->getVar('NoRegis'),
            'TANGGAL'=> $this->request->getVar('dateRegis'),
            'NAMA'=> $this->request->getVar('fullname'),
            'ALAMAT'=> $this->request->getVar('address'),
            'NO_HP'=> $this->request->getVar('phonenumber'),
            'PERUSAHAAN'=> $this->request->getVar('comname'),
            'LOKASI_USAHA'=> $this->request->getVar('comaddress'),
            'KELURAHAN'=> $this->request->getVar('kelurahan'),
            'KECAMATAN'=> $this->request->getVar('kecamatan'),
            'TANGGAL_TERBIT'=> $this->request->getVar('publishdate'),
            'NO_IZIN'=> $this->request->getVar('noIzin'),
            'JENIS_PERIZINAN'=> $this->request->getVar('namaIzin')
        ]);
        return redirect()->to('Home/search');
    }

}
