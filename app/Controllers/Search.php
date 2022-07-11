<?php

namespace App\Controllers;

use App\Models\RegionSelectModel;
use App\Models\Jenis_perizinanModel;
use App\Models\Tabel_perizinanModel;

class Search extends BaseController
{
    protected $Jenis_perizinanModel;
    protected $Tabel_perizinanModel;
    protected $RegionSelectModel;
    public function __construct()
    {
        $this->Jenis_perizinanModel = new Jenis_perizinanModel();
        $this->Tabel_perizinanModel = new Tabel_perizinanModel();
        $this->RegionSelectModel = new RegionSelectModel();
    }
    public function index()
    {
        $izin = $this->Jenis_perizinanModel->findAll();
        $dataperizinan = $this->Tabel_perizinanModel
        ->join('jenis_perizinan','jenis_perizinan.id_jenis_perizinan = tabel_perizinan.JENIS_PERIZINAN','LEFT')
        ->join('kecamatan','kecamatan.id = tabel_perizinan.KECAMATAN','LEFT')
        ->join('kelurahan','kelurahan.id = tabel_perizinan.KELURAHAN ','LEFT')
        ->paginate(2,'dataperizinan');
        $data = [
            'izin' => $izin,
            'dataperizinan' => $dataperizinan,
            'pager'=>$this->Tabel_perizinanModel->pager
        ];
        echo view('search', $data);
    }
    public function delete($id)
    {
        $this->Tabel_perizinanModel->delete(base64_decode($id));
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/Search');
    }
    public function edit($id)
    {
        $izin = $this->Jenis_perizinanModel->findAll();
        $dataperizinan = $this->Tabel_perizinanModel->find(base64_decode($id));
        $kecamatan = $this->RegionSelectModel->getDistric();
        $data = [
            'izin' => $izin,
            'dataperizinan' => $dataperizinan,
            'distric' => $kecamatan
        ];
        echo view('/edit',$data);
    }
    public function update($id)
    {
        function convert($str)
        {
            $date = explode("/",$str);
            return $date[2].'-'.$date[0].'-'.$date[1];
        }
        $this->Tabel_perizinanModel->update(base64_decode($id), [
            'NO_REGISTER'=> $this->request->getVar('NoRegis'),
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
        return redirect()->to('/Search/index');
    }
    public function getKelurahan()
    {
        $this->RegionSelectModel = new RegionSelectModel();
        $postData =$this->request->getPost('ID_Kecamatan');
        $data = $this->RegionSelectModel->getSubDistric($postData);
        echo json_encode($data);
    }
    public function search() 
    {
        $keyword = $this->request->getPost('keyword');

        $result = $this->Tabel_perizinanModel->like('NO_REGISTER',$keyword)->orLike('ALAMAT',$keyword)->orLike('NAMA',$keyword)->orLike('PERUSAHAAN',$keyword)->orLike('LOKASI_USAHA',$keyword)->orLike('KELURAHAN',$keyword)->orLike('KECAMATAN',$keyword)->findAll();

        echo json_encode($result);
    }
}