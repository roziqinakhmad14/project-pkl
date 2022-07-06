<?php
 
namespace App\Controllers;
use App\Models\RegionSelectModel;

class RegionSelect extends BaseController {
 
 
    public function index() {
         
        helper(['form', 'url']);
        $this->RegionSelectModel = new RegionSelectModel();
        $data = [
            'distric' =>$this->RegionSelectModel->geDistric()
        ];
        return view('input', $data);
    }
 
    public function getKelurahan() {
 
        $this->RegionSelectModel = new RegionSelectModel();
 
        $postData = array(
            'city' => $this->request->getVar('city'),
        );
 
        $data = $this->RegionSelectModel->getCityDepartment($postData);
 
        echo json_encode($data);
    }
}
?>
 
 