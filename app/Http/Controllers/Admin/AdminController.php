<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserPackage;

class AdminController extends Controller
{
    public function index()
    {
        
        $users=User::all();
        $packages=UserPackage::all();
        return view('admin.dashboard' , ['users' => $users , 'packages' => $packages]);
    }
}
