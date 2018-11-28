<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Mail;
use App\User;
use Auth;


class CustomAuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('custom.register');
    }

    public function register(Request $request)
    {
        $this->validation($request);
        $request['password'] = bcrypt($request->password);
        User::create($request->all()); 
        return redirect('/')->with('status', 'You are registered');
    }

    public function validation($request)
    {
        return $this->validate($request, [
            'name' => 'required|string|max:255',
            'contact' => 'required|numeric',
            'address' => 'required|string',
            'nationality' => 'required|string',
            'edu_background' => 'required',
            'email' => 'required|string|email|max:255|unique:users', //unique for user table
            'password' => 'required|string|min:6|confirmed',
            // 'gender' => 'required|string'

        ]);
    }

    public function showLoginForm()
    {
        return view('custom.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
                    'email' => 'required|email',
                    'password' => 'required'
                ]);
        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {
            return 'logged in successfully';
        }
        return 'something went wrong';
    }
}
