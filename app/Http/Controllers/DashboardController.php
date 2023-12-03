<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use App\Models\User;
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
        // get user count by role
        $user = User::where('role_id', '3')->count();
        // count tenant
        $tenant = Tenant::count();
        // Logika khusus untuk halaman dashboard member
        return view('member.home', compact('user', 'tenant'));
    }
}
