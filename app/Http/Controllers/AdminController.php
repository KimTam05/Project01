<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function login(){
        return view('admin.login');
    }

    public function check_login(Request $request){
        request()->validate([
            'email'=> 'required|email|exists:users',
            'password'=> 'required',
        ]); 
        $data = request()->all('email','password');
        $user = User::where('email', $data['email'])->first();
        if(auth()->attempt($data) && $user && Hash::check($data['password'], $user->password)){
            $request->session()->put('User', $user->name);
            return redirect()->route('admin.index');
        }else{
            $message = "Incorrect Password!";
            return redirect()->route('admin.login')->withErrors(['password' => "Incorrect Password!",   ]);
        }
    }

    public function register(){
        return view('admin.register');
    }

    public function check_register(){
        request()->validate([
            'name'=> 'required|unique:users',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:5',
            'confirm_password' => 'required|same:password',
        ]);
        $data = request()->all('name','email', 'password');
        // $data = request()->all('email', 'password');
        $data['password'] = bcrypt(request('password'));
        User::create($data);
        return redirect()->route('admin.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
