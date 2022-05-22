<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register',
            "img" => "logo.png"
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['string','required'],
        ]);

        Auth::login($user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]));
        $user->attachRole($request->role_id);
        event(new Registered($user));

        return redirect('/login')->with('success', 'Registeration Successfull! Please Login');
    }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required|max:255',
    //         'username' => ['required', 'min:3', 'max:255', 'unique:users'],
    //         'email' => 'required|email:dns|unique:users', //dns code email yg sah
    //         'password' => 'required|min:5|max:255'
    //     ]);

    //     $validatedData['password'] = bcrypt($validatedData['password']);


    //     User::create($validatedData);

    //     //$request->session()->flash('success', 'Registeration Successfull! Please Login'); //lepas register successs dia akan muncul dkt login ui

    //     return redirect('/login')->with('success', 'Registeration Successfull! Please Login');
    // }
}
