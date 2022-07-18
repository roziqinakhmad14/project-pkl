<?php
 
namespace App\Controllers;
use App\Models\RegionSelectModel;

class RegionSelect extends BaseController {
 
 
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
 
 