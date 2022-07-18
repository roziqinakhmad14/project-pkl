<?php

namespace App\Controllers;

use App\Models\RegionSelectModel;
use App\Models\Jenis_perizinanModel;
use App\Models\Tabel_perizinanModel;
use LDAP\Result;

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
        $dataperizinan = $this->getDatabase()->findAll();
        $data = [
            'izin' => $izin,
            'dataperizinan' => $dataperizinan
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
        $ids = base64_decode($id);
        $izin = $this->Jenis_perizinanModel->findAll();
        $dataperizinan = $this->Tabel_perizinanModel->find($ids);
        $kecamatan = $this->RegionSelectModel->getDistric();
        // dd($dataperizinan);
        $data = [
            'izin' => $izin,
            'dataperizinan' => $dataperizinan,
            'distric' => $kecamatan,
            'validasi'=> \Config\Services::validation()
        ];
        echo view('/edit', $data);
    }
    public function update($id)
    {
        if(!$this->validate([
            'NoRegis'=>[
                'rules' => 'required|is_unique[tabel_perizinan.NO_REGISTER]',
                'errors' =>[
                    'required'=>'No Registrasi harus di isi',
                    'is_unique'=>'No Registrasi sudah ada'
                ]
            ],
            'dateRegis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Registrasi harus Di isi'
                ]
            ],
            'fullname' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Lengkap harus Disi'
                ]
            ],
            'address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat harus di isi'
                ]
            ],
            'comname' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Perusahaan harus di isi'
                ]
            ],
            'comaddress' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Perusahaan harus di isi'
                ]
            ],
            'kecamatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kecamatan harus di isi'
                ]
            ],
            'kelurahan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Perusahaan harus di isi'
                ]
            ],
            'noIzin' => [
                'rules' => 'required|is_unique[tabel_perizinan.NO_IZIN]',
                'errors' => [
                    'required' => 'Nomer Izin harus di isi',
                    'is_unique' => 'Nomer Izin sudah ada'
                ]
            ],
            'publishdate' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal terbit harus di isi'
                ]
            ],
            'namaIzin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis izin harus di isi'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to('edit')->withInput()->with('validasi',$validation);
        }
        function convert($str)
        {
            $date = explode("/",$str);
            return $date[0].'-'.$date[1].'-'.$date[2];
        }
        $this->Tabel_perizinanModel->update(base64_decode($id), [
            'NO_REGISTER' => $this->request->getVar('NoRegis'),
            'TANGGAL' => convert($this->request->getVar('dateRegis')),
            'NAMA' => $this->request->getVar('fullname'),
            'ALAMAT' => $this->request->getVar('address'),
            'NO_HP' => $this->request->getVar('phonenumber'),
            'PERUSAHAAN' => $this->request->getVar('comname'),
            'LOKASI_USAHA' => $this->request->getVar('comaddress'),
            'KELURAHAN' => $this->request->getVar('kelurahan'),
            'KECAMATAN' => $this->request->getVar('kecamatan'),
            'TANGGAL_TERBIT' => convert($this->request->getVar('publishdate')),
            'NO_IZIN' => $this->request->getVar('noIzin'),
            'JENIS_PERIZINAN' => $this->request->getVar('namaIzin')
        ]);
        return redirect()->to('/Search/index');
    }
    public function explodeDate($daterange) {
        function convertDate($daterange) {
            $date = explode("/",$daterange);
            return $date[0].'-'.$date[1].'-'.$date[2];
        }
        function result($daterange) {
            $date = explode(" - ",$daterange);
            $fdate= convertDate($date[0]);
            $ldate= convertDate($date[1]);
            return [$fdate,$ldate];
        }

        $date = result($daterange);
        return $date;
    }
    public function getData($id1 ='',$id2 = '')
    {
        $jenisperizinan = $id1;
        $daterange = base64_decode($id2);
        // $jenisperizinan = 'IL';

        if($jenisperizinan!='none' && $daterange!='') {
            $date = $this->explodeDate($daterange);
            $dataperizinan = $this->getDatabase()
            ->where([
                'TANGGAL >=' => $date[0],
                'TANGGAL <=' => $date[1],
                'JENIS_PERIZINAN' => $jenisperizinan
                ])
            ->findAll();
        } elseif($jenisperizinan=='none' && $daterange!=''){
            $date = $this->explodeDate($daterange);
            $dataperizinan = $this->getDatabase()
            ->where([
                'TANGGAL >=' => $date[0],
                'TANGGAL <=' => $date[1]
                ])
            ->findAll();
       } elseif($jenisperizinan!='none' && $daterange==''){
            $dataperizinan = $this->getDatabase()
            ->where([
                'JENIS_PERIZINAN' => $jenisperizinan
                ])
            ->findAll();
       }
        else {
            $dataperizinan = $this->getDatabase()->findAll();
        }
        $izin = $this->Jenis_perizinanModel->findAll();
        $data = [
            'dataperizinan' => $dataperizinan
        ];
        echo view('tabel', $data);
    }
}
