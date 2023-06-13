<?php

namespace App\Controllers;

class Kelulusan extends BaseController
{
    public function index()
    {
        return view('inputData');
    }

    public function processData()
    {
        $nim = $this->request->getPost('nim');
        $nama = $this->request->getPost('nama');
        $status = $this->request->getPost('status');

        $data['nim'] = $nim;
        $data['nama'] = $nama;
        $data['status'] = $status;

        return view('halamanKelulusan', $data);
    }
}


