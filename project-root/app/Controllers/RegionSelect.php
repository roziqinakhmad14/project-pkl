<?php
 
namespace App\Controllers;
use App\Models\ReigonSelectModel;

class RegionSelect extends BaseController {
 
 
    public function index() {
         
        helper(['form', 'url']);
        $this->ReigonSelectModel = new ReigonSelectModel();
        $data = [
            'distric' =>$this->ReigonSelectModel->geDistric()
        ];
        return view('input', $data);
    }
 
    public function getKelurahan() {
 
        $this->ReigonSelectModel = new ReigonSelectModel();
 
        $postData = array(
            'city' => $this->request->getVar('city'),
        );
 
        $data = $this->ReigonSelectModel->getCityDepartment($postData);
 
        echo json_encode($data);
    }
}
?>
 
 