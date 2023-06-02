<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class DashboardController extends Controller
{
    
    public function index()
    {
        $user = auth()->user();


        return view("dashboard.index", compact('user'));
    }
}
