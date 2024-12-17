<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Halaman Editor',
            'footer' => 'LPM - Project 2024'
        ];
        return view ('pages/editor/dashboard',$data);
    }
}