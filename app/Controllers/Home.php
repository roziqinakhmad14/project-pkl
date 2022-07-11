<?php

namespace App\Controllers;
use App\Models\RegionSelectModel;
use App\Models\Jenis_perizinanModel;
use App\Models\Tabel_perizinanModel;
use PhpParser\Node\Expr\AssignOp\Concat;

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
        $dataperizinan = $this->Tabel_perizinanModel->findAll();
        $data = [
            'izin'=> $izin,
            'dataperizinan'=>$dataperizinan
        ];
        echo view('dashboard',$data);
    }
    public function search() 
    {
        $keyword = $this->request->getPost('keyword');

        $jenis_perizinan = $this->Jenis_perizinanModel->like('id_jenis_perizinan',$keyword)->orLike('nama_perizinan',$keyword)->findAll();
        $result = [];
        foreach ($jenis_perizinan as $i) {
            $num_rows = $this->Tabel_perizinanModel->getWhere(['JENIS_PERIZINAN'=> $i['id_jenis_perizinan']])->getNumRows();
            $num_rows = array("num_rows"=>$num_rows);
            $i = array_merge($i,$num_rows);
            array_push($result,$i);
        }
        echo json_encode($result);
    }
}
