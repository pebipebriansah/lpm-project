<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin',
            'footer' => 'LPM - Project 2024'
        ];
        return view('pages/admin/dashboard', $data);
    }
}