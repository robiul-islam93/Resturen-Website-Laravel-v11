<?php

namespace App\Http\Controllers\adminpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function show()
    {
        $admin = Auth::user(); // Assuming the authenticated user is the admin

        return view('adminpanel.admin-profile.admin-profile-list', compact('admin'));
    }
}
