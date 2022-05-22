<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class DropshipController extends Controller
{
    public function index(){
        return view('dashboard.dropship.index');
    }
}
