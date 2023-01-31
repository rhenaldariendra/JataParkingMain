<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $req){
        // dd($req);
        $req->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $field = filter_var($req->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if(Auth::attempt(array($field => $req->username, 'password' => $req->password))){
            return redirect('/admin');
        }
        else{
            return redirect()->back();
        }
    }
}
