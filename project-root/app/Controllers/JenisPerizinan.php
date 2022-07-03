<?php namespace App\Controllers;

use App\Models\JenisPerizinanModel;

class JenisPerizinan extends BaseController
{
    public function index()
    {
        $model = new JenisPerizinanModel();
        $data['jenis_perizinan'] = $model->JenisIzin();
        return view('input', $data);
    }
}
