<?php
 
namespace App\Controllers;
use App\Models\RegionSelectModel;
use App\Models\Jenis_perizinanModel;
use App\Models\Tabel_perizinanModel;

class RegionSelect extends BaseController {

    public function __construct()
    {
        $this->Jenis_perizinanModel = new Jenis_perizinanModel();
        $this->Tabel_perizinanModel = new Tabel_perizinanModel();
        $this->RegionSelectModel = new RegionSelectModel();
    }
 
    public function getKelurahan($id)
    {
        $this->RegionSelectModel = new RegionSelectModel();
        // $postData =$this->request->getPost('ID_Kecamatan');
        $query  = $this->RegionSelectModel->getSubDistric($id);
        $data = "<option value=''>- Select Kelurahan -</option>";
        foreach ($query as $value) {
        	$data .= "<option value='".$value->id."'>".$value->Kelurahan."</option>";
    	}
    	echo $data;
    }
}
?>
 
 