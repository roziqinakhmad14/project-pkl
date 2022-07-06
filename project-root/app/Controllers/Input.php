<?php

namespace App\Controllers;
use App\Models\ReigonSelectModel;
use App\Models\Jenis_perizinanModel;
use App\Models\Tabel_perizinanModel;


class Input extends BaseController
{
    protected $Jenis_perizinanModel;
    protected $Tabel_perizinanModel;
    protected $ReigonSelectModel;
    public function __construct()
    {
        $this->Jenis_perizinanModel = new Jenis_perizinanModel();
        $this->Tabel_perizinanModel = new Tabel_perizinanModel();
        $this->ReigonSelectModel = new ReigonSelectModel();

    }
    public function index()
    {
        $izin = $this->Jenis_perizinanModel->findAll();
        $dataperizinan = $this->Tabel_perizinanModel->findAll();
        $kecamatan = $this->ReigonSelectModel->getDistric();
        $data = [
            'izin'=> $izin,
            'dataperizinan'=>$dataperizinan,
            'distric' => $kecamatan
        ];
        echo view('input',$data);
    }
    function convert($str)
    {
    	$date = explode("/",$str);
		return $date[2].'-'.$date[0].'-'.$date[1];
    }
    public function save()
    {
        function convert($str)
        {
            $date = explode("/",$str);
            return $date[2].'-'.$date[0].'-'.$date[1];
        }
        $this->Tabel_perizinanModel->insert([
            'id'=> $this->request->getVar('NoRegis'),
            'TANGGAL'=> convert($this->request->getVar('dateRegis')),
            'NAMA'=> $this->request->getVar('fullname'),
            'ALAMAT'=> $this->request->getVar('address'),
            'NO_HP'=> $this->request->getVar('phonenumber'),
            'PERUSAHAAN'=> $this->request->getVar('comname'),
            'LOKASI_USAHA'=> $this->request->getVar('comaddress'),
            'KELURAHAN'=> $this->request->getVar('kelurahan'),
            'KECAMATAN'=> $this->request->getVar('kecamatan'),
            'TANGGAL_TERBIT'=> convert($this->request->getVar('publishdate')),
            'NO_IZIN'=> $this->request->getVar('noIzin'),
            'JENIS_PERIZINAN'=> $this->request->getVar('namaIzin')
        ]);
        return redirect()->to('Search');
    }
    public function getKelurahan()
    {
        $this->ReigonSelectModel = new ReigonSelectModel();
        $postData =$this->request->getPost('ID_Kecamatan');
        $data = $this->ReigonSelectModel->getSubDistric($postData);
        echo json_encode($data);
    }

}
