<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function login(){
        return view('admin.login');
    }

    public function check_login(){
        request()->validate([
            'email'=> 'required|email|exists:users',
            'password'=> 'required',
        ]);
        $data = request()->all('email','password');
        Auth::login($data);
    }

    public function register(){
        return view('admin.register');
    }

    public function check_register(){
        request()->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required',
            'confirm_password' => 'required|same:password',
        ]);
        $data = request()->all('email', 'password');
        $data['password'] = bcrypt(request('password'));
        User::create($data);
        return redirect()->route('admin.login');
    }
}
