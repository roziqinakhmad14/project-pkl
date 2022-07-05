<?php namespace App\Models;

use CodeIgniter\Model;

class ReigonSelectModel extends Model
{
    protected $db;
    public function getDistric() {
        $builder = $this->db->table('kecamatan');
        $query = $builder->get();
        $query = $query->getResult();
        return json_decode(json_encode($query),true);
     }

     public function getSubDistric($postData) {
        $builder = $this->db->table('kelurahan');
        $query = $builder->getWhere(['ID_Kecamatan'=> $postData]);
        $query = $query->getResult();
        return json_decode(json_encode($query),true);
     }
    
}
?>