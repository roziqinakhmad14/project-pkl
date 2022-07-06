<?php

namespace App\Controllers;
use App\Models\ReigonSelectModel;
use App\Models\Jenis_perizinanModel;
use App\Models\Tabel_perizinanModel;


class Home extends BaseController
{
    protected $Jenis_perizinanModel;
    protected $Tabel_perizinanModel;
    protected $ReigonSelectModel;
    public function __construct()
    {
        $this->Jenis_perizinanModel = new Jenis_perizinanModel();
        $this->Tabel_perizinanModel = new Tabel_perizinanModel();
        $this->ReigonSelectModel = new ReigonSelectModel();

    }
    public function index()
    {
        echo view('dashboard');
    }
}
