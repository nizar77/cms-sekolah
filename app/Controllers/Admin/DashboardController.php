<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
        // return '<h1>Dashboard Admin</h1><p>Halo, ' . esc(session()->get('user_name')) . ' (' . esc(session()->get('user_role')) . ')</p><a href="' . base_url('logout') . '">Logout</a>';
    }
}
