<?php

namespace App\Controllers;
use App\Models\RegionSelectModel;
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
        $this->RegionSelectModel = new RegionSelectModel();
    }
    public function index()
    {
        $izin = $this->Jenis_perizinanModel->findAll();
        $total = [];
        foreach ($izin as $keyizin) {
            array_push($total, $this->getDatabase()->where('JENIS_PERIZINAN',$keyizin['id_jenis_perizinan'])->countAllResults());
        }
        $data = [
            'izin'=> $izin,
            'total'=>$total
        ];
        echo view('dashboard',$data);
    }
}
