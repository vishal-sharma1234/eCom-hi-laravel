<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req){
        // return $req->input();

        $user = User::where(['email' => $req->email])->first();

        if(!$user || !Hash::check($req->password , $user->password)){

            // echo   Hash::check($req->passwrod , $user->password);

            return "user not found";
        }else{
            $req->session()->put('user' , $user);
            return redirect('/');
        }


    }
}
