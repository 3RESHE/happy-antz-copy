<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // TODO: add other pages for admin
    public function home()
    {
        return view('users.admin.dashboard.dashboard');
    }
}
