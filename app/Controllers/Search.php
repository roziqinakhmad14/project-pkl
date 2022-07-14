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
        // Validasi!!
        if(!$this->validate([
            'dateRegis'=>[
                'rules' => 'required|is_unique[tabel_perizinan.NO_REGISTER]',
                'errors' =>[
                    'required'=>'NO Registrasi harus di isi',
                    'is_unique'=>'No Registrasi sudah ada'
                ]
            ],
            'dateRegis'=>[
                'rules' => 'required',
                'errors' =>[
                    'required'=>'Tanggal Registrasi harus Di isi'
                ]
            ],
            'fullname'=>[
                'rules' => 'required',
                'errors' =>[
                    'required'=>'Nama Lengkap harus Disi'
                ]
            ],
            'address'=>[
                'rules' => 'required',
                'errors' =>[
                    'required'=>'Alamat harus di isi'
                ]
            ],
            'comname'=>[
                'rules' => 'required',
                'errors' =>[
                    'required'=>'Nama Perusahaan harus di isi'
                ]
            ],
            'comaddress'=>[
                'rules' => 'required',
                'errors' =>[
                    'required'=>'Alamat Perusahaan harus di isi'
                ]
            ],
            'kecamatan'=>[
                'rules' => 'required',
                'errors' =>[
                    'required'=>'Kecamatan harus di isi'
                ]
            ],
            'kelurahan'=>[
                'rules' => 'required',
                'errors' =>[
                    'required'=>'Alamat Perusahaan harus di isi'
                ]
            ],
            'noIzin'=>[
                'rules' => 'required|is_unique[tabel_perizinan.NO_IZIN]',
                'errors' =>[
                    'required'=>'Nomer Izin harus di isi',
                    'is_unique'=>'Nomer Izin sudah ada'
                ]
            ],
            'publishdate'=>[
                'rules' => 'required',
                'errors' =>[
                    'required'=>'Tanggal terbit harus di isi'
                ]
            ],
            'namaIzin'=>[
                'rules' => 'required',
                'errors' =>[
                    'required'=>'Jenis izin harus di isi'
                ]
            ],
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('edit')->withInput()->with('validasi',$validation);
        }
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
}