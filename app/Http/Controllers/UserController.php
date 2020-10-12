<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }


    public function login(Request $req)
    {
        # code...

        $user = User::where(['email'=>$req->email])->first();
        if(!$user || Hash::check($req->password,$user->password))
        {
            return "username or password is not matched";
        }else{
            $req->session()->put('user',$user);
            return redirect('/');
        }

    }
}
