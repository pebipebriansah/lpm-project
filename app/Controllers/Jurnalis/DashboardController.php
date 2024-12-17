<?php

namespace App\Controllers\Jurnalis;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard Jurnalis',
            'footer' => 'LPM - Project 2024',
        ];
        return view('pages/jurnalis/dashboard', $data);
    }
}