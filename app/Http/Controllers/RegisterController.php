<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\Store;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'confirm_password' => 'required|same:password',
        ]);
        unset($validatedData['confirm_password']);

        User::create($validatedData);
        // $request->session()->flash('success', 'Registration was successfull! please login');
        return redirect('/login')->with('success', 'Registration was successfull! please login');
    }
}
