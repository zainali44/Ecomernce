<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            return "Username or password is not matched";
        } else {
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }

    function register(Request $req)
    {
        // return $req->input();
        $user= new User;
        $user->username=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->name=$req->name;
        $user->save();
        return redirect('/login');
    }

    function adminlogin(Request $req)
    {
        if ($req->name == 'admin@gmail.com' && $req->password == 'admin') {
            $req->session()->put('admin', $req->name);
            return redirect('/admin');
        } else {
            return "Username or password is not matched";
        }
    }
}
