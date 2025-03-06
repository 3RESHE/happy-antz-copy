<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard ()
    {
        return view('users.admin.dashboard.dashboard');
    }

    public function admins()
    {
        $admins = User::where('role', 'admin')->paginate(10); // 10 per page
    
        return view('users.admin.user-management.admin', compact('admins'));
    }


    public function employers()
    {
        $employers = User::where('role', 'employer')
            ->withCount('jobPosts') // Get the number of job posts for each employer
            ->paginate(10); // 10 per page
    
        return view('users.admin.user-management.employer', compact('employers'));
    }
    

    public function talents()
    {
        $talents = User::where('role', 'talent')->paginate(10); // 10 per page
    
        return view('users.admin.user-management.talent', compact('talents'));
    }
    

    public function logs ()
    {
        return view('users.admin.logs.admin-logs');
    }


}