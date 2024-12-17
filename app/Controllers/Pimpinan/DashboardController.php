<?php

namespace App\Controllers\Pimpinan;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Halaman Pimpinan',
            'footer' => 'LPM - Project 2024'
        ];
        return view ('pages/pimpinan/dashboard',$data);
    }
}