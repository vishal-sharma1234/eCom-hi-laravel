<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req)
    {


        if (Auth::check()) {
            return redirect('/');
        } else {

            $credentials = $req->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if (Auth::attempt($credentials)) {
                return redirect('/');
            } else {
                return redirect('/login');
            }
        }
    }


    function loginView(){
        
        if (Auth::check()) {
            return redirect('/');
        }else{
            return view('login');
        }

    }

    function logout(){
        
            Auth::logout();
            return redirect('/login');
        
    }

}
