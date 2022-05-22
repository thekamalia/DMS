<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{


    public function index(User $user )
    {

        if (Auth::user()->hasRole('seller')) {
            return view('dashboard.index');
        } else if (Auth::user()->hasRole('dropship')) {
            return view('dashboardds.index');
        }

    }
}
