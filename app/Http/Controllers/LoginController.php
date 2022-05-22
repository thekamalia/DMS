<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;


class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login',
            "img" => "logo.png"
        ]);
    }

    // public function authenticate(Request $request)
    // {

    //     if(Auth::attempt( ['email' => $request->email,'password' => $request->password] )){
    //         $user = Auth::user();
    //        // $data['token'] =  $user->createToken('authtoken')->plainTextToken;
    //         $data['name'] =  $user->name;

    //         $response = [
    //             'success' => true,
    //             'data'    => $data,
    //             'message' => 'User login successfully',
    //         ];
    //         return 'success';
    //         // return response()->json($response, 200);
    //     }
    //     else{
    //         dd('dd');
    //     }
    // }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([ //credentials untuk valid account
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();  //you should regenerate the user's session to prevent session fixation attacks
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', "Login Failed");
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
