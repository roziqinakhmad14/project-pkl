<?php namespace App\Controllers;
use App\Models\Tabel_perizinanModel;
use App\Models\ReigonSelectModel;

class UjiCoba extends BaseController
{
    protected $ReigonSelectModel;
    public function __construct()
    {
        $this->ReigonSelectModel = new ReigonSelectModel();
    }
    
    public function index()
    {
        $izin = $this->ReigonSelectModel->getDistric();
        dd($izin);
        return view('cobadata/index');
    }
}
