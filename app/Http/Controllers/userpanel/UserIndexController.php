<?php

namespace App\Http\Controllers\userpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserIndexController extends Controller
{
    public function userIndex() {
        return view('userpanel.all-pages.user-index-page');
    }
}
