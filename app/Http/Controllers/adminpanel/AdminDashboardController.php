<?php

namespace App\Http\Controllers\adminpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function adminDashboard() {
        return view('adminpanel.dashboard.admin-dashboard');
    }
}
