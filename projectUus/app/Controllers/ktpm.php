<?php

namespace App\Controllers;

class ktpm extends BaseController
{
    public function index()
    {
        return view('ktpm');
    }
    public function indexKTM()
    {
        return view('lihatKtm');
    }
}
