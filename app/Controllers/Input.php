<?php

namespace App\Controllers;
use App\Models\RegionSelectModel;
use App\Models\Jenis_perizinanModel;
use App\Models\Tabel_perizinanModel;
use CodeIgniter\Validation\StrictRules\Rules;
use Config\Validation;
use PHPUnit\Util\Xml\Validator;

class Input extends BaseController
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
        // session();
        $izin = $this->Jenis_perizinanModel->findAll();
        $dataperizinan = $this->Tabel_perizinanModel->findAll();
        $kecamatan = $this->RegionSelectModel->getDistric();
        $data = [
            'izin'=> $izin,
            'dataperizinan'=>$dataperizinan,
            'distric' => $kecamatan,
            'validasi'=> \Config\Services::validation()
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
        // Validasi!!
        if(!$this->validate([
            'NoRegis'=>[
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
            return redirect()->to('input')->withInput()->with('validasi',$validation);
        }
        function convert($str)
        {
            $date = explode("/",$str);
            return $date[2].'-'.$date[0].'-'.$date[1];
        }
        $this->Tabel_perizinanModel->insert([
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
        return redirect()->to('Search');
    }
    public function getKelurahan()
    {
        $this->RegionSelectModel = new RegionSelectModel();
        $postData =$this->request->getPost('ID_Kecamatan');
        $data = $this->RegionSelectModel->getSubDistric($postData);
        echo json_encode($data);
    }

}
