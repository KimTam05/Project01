<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use Illuminate\Contracts\Session\Session;

class HomeController extends Controller
{
    public function index(){
        $cats = Category::orderBy("name","ASC")->get();
        $products = Product::orderBy("id","ASC")->limit(6)->get();
        return view('index');
    }

    public function login(){
        return view('login');
    }
    public function loginSubmit(Request $request){
        $request->validate([
            'email'=> 'required|email|exists:customers',
            'password'=> 'required',
        ]);
        $data = $request->only(['email','password']);
        $customer = Customer::where('email', $request->email)->first();
        if(Hash::check($data['password'], $customer->password)){
            $request->session()->put('login_success', $customer->name);
            return redirect('/');
        }
        else{
            return redirect('/login')->withErrors('Incorrect Section');
        }
    }
    public function register(){
        return view('register');
    }
    public function registerSubmit(Request $request){
        $request->validate([
            'name'=> 'required|unique:customers',
            'email'=> 'required|email|unique:customers',
            'password'=> 'required',
            'confirm_password'=> 'required|same:password'
        ]);
        $data = $request->only(['name','email','password', 'confirm_password']);
        $data['password'] = bcrypt($data['password']);
        Customer::create($data);
        return redirect('/login');
    }

    public function logout(Request $request){
        $request->session()->forget('login_success');
        return redirect('/');
    }
}
