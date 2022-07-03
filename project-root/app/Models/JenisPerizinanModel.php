<?php namespace App\Models;

use CodeIgniter\Model;

class JenisPerizinanModel extends Model
{
    /**
     * table name
     */
    protected $table = "jenis_perizinan";
    public function JenisIzin()
    {
        return $this->findall();
    }
}
?>