<?php namespace App\Models;

use CodeIgniter\Model;

class Tabel_perizinanModel extends Model
{
    protected $table = 'tabel_perizinan';
    protected $allowedFields = [
        'id','TANGGAL','NAMA','ALAMAT','NO_HP','PERUSAHAAN','LOKASI_USAHA',
        'KELURAHAN','KECAMATAN','TANGGAL_TERBIT','NO_IZIN','JENIS_PERIZINAN'
    ];
    function getAll(){
        $buileder = $this->db->table('tabel_perizinan');
        $buileder->join('jenis_perizinan','jenis_perizinan.id_jenis_perizinan = tabel_perizinan.JENIS_PERIZINAN');
        $query = $buileder->get();
        $query = $query->getResult();
        return json_decode(json_encode($query),true);
    }
}
?>