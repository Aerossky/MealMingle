<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        // Logika khusus untuk halaman dashboard admin
        return view('admin.dashboard');
    }

    public function tenantDashboard()
    {
        // Logika khusus untuk halaman dashboard tenant
        return view('tenant.dashboard');
    }

    public function memberDashboard()
    {
        // Logika khusus untuk halaman dashboard member
        return view('member.home');
    }
}
